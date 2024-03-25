<?php
    include("modules/moduleValidation.php");
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'blog';


    $method = $_SERVER['REQUEST_METHOD'];
    $dbConnection = new DataAccess();
    $dbConnection->createDBConnection(HOST, USERNAME, PASSWORD, DATABASE);
    $result = $dbConnection->doDBRequest("SELECT * FROM post");
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
                if ($dbConnection->doDBRequest($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $dbConnection->getConnection()->error;
                }
            }
        }
    }
    $dbConnection->closeDBConnection();
