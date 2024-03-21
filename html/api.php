<?php
    include("modules/moduleSQL.php");
    function saveFile(string $file, string $data): bool {
        $myFile = fopen($file, 'w');
        if ($myFile) {
            $result = fwrite($myFile, $data);
            if ($result) {
                fclose($myFile);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    function saveImage(string $imageBase64, string $imageName) {
        $imageBase64Array = explode(';base64,', $imageBase64);
        $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
        $imageDecoded = base64_decode($imageBase64Array[1]);
        saveFile("static/images/{$imageName}.jpg", $imageDecoded); // static/images/{$imageName}.{$imgExtention}
    }

    $method = $_SERVER['REQUEST_METHOD'];
    $expectedKeys = ['title', 'subtitle', 'content', 'author',  'author_url', 'publish_date', 'image_url', 'featured'];
    $rightKeys = 0;
    $conn = createDBConnection();
    $result = $conn->query("SELECT * FROM post");
    $expectedCountParameters = mysqli_field_count($conn);
    $posts = ($result->num_rows > 0) ? $posts = $result->fetch_all(MYSQLI_ASSOC) : [];


    if ($method == 'POST') {

        $dataAsJson = file_get_contents("php://input");
        $dataAsArray = json_decode($dataAsJson, true);
        if (count($dataAsArray) == ($expectedCountParameters - 1)) {
            foreach($expectedKeys as $key) {
                if (array_key_exists($key, $dataAsArray)) {
                    $rightKeys++;
                } else {
                    echo 'Losted parameter is ' . $key;
                    break;
                }
            }
            if (($expectedCountParameters - 1) == $rightKeys) {
                $imageName = "background_{$dataAsArray['title']}_" . (end($posts)['id'] + 1);
                saveImage($dataAsArray['image_url'], $imageName);
                if (exif_imagetype("static/images/{$imageName}.jpg")) {
                    $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, image_url, featured) VALUES
                    ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}',
                    '{$dataAsArray['content']}', '{$dataAsArray['author']}', '{$dataAsArray['author_url']}', '{$dataAsArray['publish_date']}', 
                    '{$imageName}.jpg', '{$dataAsArray['featured']}');";
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Hmm, something wrong with Image_URL, check it again";
                }
            }
        } else {
            echo 'given ' . count($dataAsArray) . '/ 8 parameters';
        }
        //saveFile('data.json', $dataAsJson);
        //saveImage($dataAsArray['image']);

    }
    closeDBConnection($conn);

?>