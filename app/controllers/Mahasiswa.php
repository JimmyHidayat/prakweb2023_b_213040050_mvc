<?php

class Mahasiswa extends Controller
{

    public function index()
    {
        $data['Judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['Judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('behasil', 'ditambahkan', 'success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash('behasil', 'ditambahkan', 'danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }
    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('behasil', 'ditambahkan', 'success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash('behasil', 'ditambahkan', 'danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }

    public function getubah()
    {

        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
    public function ubah()
    {

        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('behasil', 'dibuah', 'success');
            header('location:' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash('behasil', 'diubah', 'danger');
            header('location:' . BASEURL . '/mahasiswa');
        }
    }
    public function cari() {

        $data['Judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariData();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index'.$data);
        $this->view('templates/footer');
    }
}
