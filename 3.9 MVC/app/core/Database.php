<?php

class Database
{
    protected $stmt, $database;
    public function __construct()
    {
        try {
            $dsn = 'mysql:host=localhost;dbname=mvc';
            $username = 'yasa';
            $password = 'bebekgoreng';
            $this->database = new PDO($dsn, $username, $password);
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query): void
    {
        $this->stmt = $this->database->prepare($query);
    }
    public function bind($param, $value, $type = null): void
    {
        if (is_null($type))
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(): void
    {
        $this->stmt->execute();
    }
    public function selectAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function select()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
