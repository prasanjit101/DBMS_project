<?php

class DatabaseConnection
{
private $servername = "localhost";
private $username = "prakash";
private $password = "admin123";
private $databaseName="ourdatabase";

public $conn="";

public function __construct()
{
    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->databaseName", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}


}
?>