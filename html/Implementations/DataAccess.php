<?php
include("IDataAccess.php");
class DataAccess implements IDataAccess {
    private $connection;
    public function createDBConnection($host, $user, $password, $dataBase) {
        $this->connection = new mysqli($host, $user, $password, $dataBase);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return true;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeDBConnection() {
        $this->connection->close();
    }

    public function doDBRequest($request) {
        return $this->connection->query($request);
    }
}
