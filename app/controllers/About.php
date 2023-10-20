<?php

class About extends Controller
{

    public function index($nama = 'Jimmy', $pekerjaan = 'Mahasiswa', $umur = 21)
    {
        $data['Nama'] = $nama;
        $data['Pekerjaan'] = $pekerjaan;
        $data['Umur'] = $umur;
        $data['Judul'] = 'About Me';
        $this->view('templates/header'.$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['Judul'] = 'Pages';
        $this->view('templates/header'. $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
