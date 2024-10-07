<?php

class Movies extends Controller {
    public function index() {
        $data['judul'] = 'Movies List';
        $data['mov'] = $this->model('Movies_model')->getAllMovies();
        $this->view('templates/header', $data);
        $this->view('movies/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Movie';
        $data['movie'] = $this->model('Movies_model')->getMovieById($id);
        $this->view('templates/header', $data);
        $this->view('movies/detail', $data);
        $this->view('templates/footer');
    }

    public function add() {
        if ($this->model('Movies_model')->addMovie($_POST) > 0) {
            Flasher::setFlash('successfully', 'added', 'success');
            header('Location: ' . BASEURL . '/movies');
            exit;
        } else {
            Flasher::setFlash('failed to be', 'added', 'danger');
        }
    }

    public function delete($id) {
        if ($this->model('Movies_model')->deleteMovie($id) > 0) {
            Flasher::setFlash('successfully', 'deleted', 'danger');
            header('Location: ' . BASEURL . '/movies');
            exit;
        } else {
            Flasher::setFlash('failed to be', 'added', 'danger');
        }
    }
}
