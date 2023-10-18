<?php

class About
{

    public function index($nama = 'Jimmy', $pekerjaan = 'Mahasiswa')
    {
        echo "Hal, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
