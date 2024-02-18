<?php

class Database 
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "nft";
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }

    public function insertUser($login, $username, $phone, $email, $password, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user` (`login`, `username`, `phone`, `email`, `password`, `role`) VALUES ('$login', '$username', '$phone', '$email', '$password', '$role')";

        if ($this->connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
        }
    }
}

$db = new Database();
$connection = $db->getConnection();


?>

