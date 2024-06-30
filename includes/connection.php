<?php

class DatabaseConnection
{
    private $server;
    private $username;
    private $password;
    private $db;
    private $conn;

    public function __construct($server, $username, $password, $db)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
    }

    public function connect()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->db);

        if (!$this->conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        return $this->conn;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

// Usage
$server = "";
$username = "";
$password = "";
$db = "";

try {
    $databaseConnection = new DatabaseConnection($server, $username, $password, $db);
    $conn = $databaseConnection->connect();
} catch (Exception $e) {
    die($e->getMessage());
}
