<?php

class DataBaseConnaction {
    private $host = "localhost";
    private $db = "AfricaV2";
    private $username="root";
    private $password= "";
    public $connection;


    public function __construct()
    {
        $this->connect();
    }
    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db};";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
        return $this->connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>


