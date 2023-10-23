<?php 

class Mahasiswa extends Controller{
    
    public function index () {
        $data['Judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view ('templates/header',$data);
        $this->view ('mahasiswa/index');
        $this->view ('templates/footer');
    }

public function detail($id) {
    $data['Judul'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view ('templates/header',$data);
    $this->view ('mahasiswa/index');
    $this->view ('templates/footer');
}
public function tambah () {
    if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0) {
        header('location:'.BASEURL.'/mahasiswa');
}
}
}