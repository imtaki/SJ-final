<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'fitlife';
    private $username = 'root';
    private $password = '';
    protected $connection;

    // destruktor, basically desconnectne DB
    public function __desctruct() {
        $this->connection = null;
    }
    // pripojenie
    protected function connect() {
        try {
            $this->connection = new PDO(
                "mysql:host=" . $this->host . 
                ";dbname=" . $this->dbname . 
                ";charset=utf8", 
                $this->username, 
                $this->password
            );
            // PDO dokumentacia
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            return $this->connection;
        } catch(PDOException $e) { // vypise chybu
            die("Chyba pripojenia k databaze:" . $e->getMessage());
        }
    }
}


?>