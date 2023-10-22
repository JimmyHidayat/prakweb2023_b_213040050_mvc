<?php

class Home extends Controller
{

    public function index()
    {
        $data['judul'] = 'Home';
        $data['Nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header'.$data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
