<?php
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'blog';
    const PORT = '3306';
    function createDBConnection(): mysqli {
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br>";
        return $conn;
    }
    function closeDBConnection(mysqli $conn): void {
        $conn->close();
    }
    function getAndPrintPostsFromDB(mysqli $conn): void {
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                echo $row['id'];
            }
        } else {
            echo "0 results";
        }
    }
    $conn = createDBConnection();
    getAndPrintPostsFromDB($conn);
    closeDBConnection($conn);