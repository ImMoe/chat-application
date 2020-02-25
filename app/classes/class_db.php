<?php
class class_db {
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $dbConnection;
    public $charset = "utf8";

    public function __construct($host, $dbname, $user, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }
    public function connection() {
        if ($this->dbConnection) {
            return $this->$dbConnection;
        }
        try {
            $this->dbConnection = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function selectAll($table) {
        $statement = $this->dbConnection->query("SELECT * FROM $table ORDER BY chat_id DESC");
        if ($statement !== FALSE) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return "Query execution failed.";
        }
    }
    public function insert($query, $params) {
        $statement = $this->dbConnection->prepare($query);
        $statement->execute($params);
    }
    public function delete($table, $col, $identifier) {
        $statement = $this->dbConnection->prepare("DELETE FROM $table WHERE $col = $identifier");
        $statement->execute();
    }

}