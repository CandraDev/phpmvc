<?php

class Movies_model {
    private $dbh; //database handler
    private $stmt; //statement

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMovies() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM movies');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}