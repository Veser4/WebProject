<?php
interface IDataAccess {
    public function createDBConnection($host, $user, $password, $dataBase) : bool;
    public function doDBRequest(string $request) : bool;
    public function closeDBConnection();
    public function getConnection();
}