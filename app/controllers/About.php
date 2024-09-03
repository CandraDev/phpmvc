<?php

class About {
    public function index($nama = 'Cancan', $pekerjaan = 'Wibu') {
        echo "Hello, nama saya $nama, saya dalah seorang $pekerjaan.";
    }

    public function page() {
        echo "About/page";
    }
}