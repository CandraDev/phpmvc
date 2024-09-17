<?php

class Movies_model extends Database {
    private $table = 'movies';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMovies() {
       $this->db->query("SELECT * FROM `$this->table`");
       return $this->db->resultSet();
    }

    public function getMovieById($id) {
        $this->db->query("SELECT * FROM `$this->table` WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addMovie($data) {
        
    }
}