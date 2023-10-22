<div class="container mt-5">

<div class="card" style="widh : 18rem;">
<div class="card-body">
    <h5 class="card-title"><?= $data ['mhs']; ?></h5>
    <h6 class="card-subtitle mn-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
    <p class="card-text"><?= $data ['mhs']['Email']; ?></p>
    <p class="card-text"><?= $data ['mhs']['Jurusan']; ?></p>
    <a href="<?= BASEURL;?>/mahasiswa" class="card-link">Kembali</a>
</div></div>
</div>