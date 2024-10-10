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
        $query = "INSERT INTO `$this->table`
                VALUES
                (NULL, :title, :year, :rated, :genre, :poster)";
        $this->db->query($query);
        $this->db->bind('title', $data['movieTitle']);
        $this->db->bind('year', $data['movieYear']);
        $this->db->bind('rated', $data['movieRated']);
        $this->db->bind('genre', $data['movieGenre']);
        $this->db->bind('poster', $data['moviePoster']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMovie($id){
        $this->db->query("DELETE FROM `$this->table` WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateMovie($data) {
        $query = "UPDATE `$this->table`
                SET
                title = :title,
                year = :year,
                rated = :rated,
                genre = :genre,
                poster = :poster
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('title', $data['movieTitle']);
        $this->db->bind('year', $data['movieYear']);
        $this->db->bind('rated', $data['movieRated']);
        $this->db->bind('genre', $data['movieGenre']);
        $this->db->bind('poster', $data['moviePoster']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}