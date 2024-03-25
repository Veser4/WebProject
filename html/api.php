<?php
    include("modules/moduleSQL.php");
    include("modules/moduleValidation.php");

    $method = $_SERVER['REQUEST_METHOD'];
    $conn = createDBConnection();
    $result = $conn->query("SELECT * FROM post");
    $posts = ($result->num_rows > 0) ? $posts = $result->fetch_all(MYSQLI_ASSOC) : [];
    $expectedKeys = array_keys(end($posts));
    unset($expectedKeys[0]);

    if ($method == 'POST') {
        $dataAsJson = file_get_contents("php://input");
        $dataAsArray = json_decode($dataAsJson, true);
        if (validCountOfRightParameters($dataAsArray, $expectedKeys)) {
            $imagePost = "background_{$dataAsArray['title']}_" . (end($posts)['id'] + 1);
            $imageAuthor = "logo_{$dataAsArray['author']}";
            if ((validImageCreation($dataAsArray['image_url'], $imagePost)) && (validImageCreation($dataAsArray['author_url'], $imageAuthor))) {
                $keysRow = implode(', ', $expectedKeys);
                $sql = "INSERT INTO post ({$keysRow}) VALUES
                ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}',
                '{$dataAsArray['content']}', '{$dataAsArray['author']}', '{$imageAuthor}.jpg', '{$dataAsArray['publish_date']}',
                '{$imagePost}.jpg', '{$dataAsArray['featured']}');";
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
    closeDBConnection($conn);
