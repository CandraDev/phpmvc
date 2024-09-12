<?php

class Movies extends Controller {
    public function index() {
        $data['judul'] = 'Movies List';
        $data['mov'] = $this->model('Movies_model')->getAllMovies();
        $this->view('templates/header', $data);
        $this->view('movies/index', $data);
        $this->view('templates/footer');
    }
}