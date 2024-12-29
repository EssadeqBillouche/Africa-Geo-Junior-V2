<?php
spl_autoload_register(function ($class) {
    require $class . '.php';
});
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
            echo "Connected successfully";
        }
        catch (PDOException $e) {
            die("Database not connecting with this error *(Makhdamach)" . $e->getMessage());
        }
        return $this->connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

?>


