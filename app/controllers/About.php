<?php

class About extends Controller {
    public function index($nama = 'Cancan', $umur = 18, $pekerjaan = 'Wibu') {

        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data); //echo "Hello, nama saya $nama, saya dalah seorang $pekerjaan.";
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'Page ';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}