<div class="container mt-5" >

<div class="row">
  <div class="col-lg-6">
    <? Flasher::flash(); ?>
  </div>

</div>
<div class="row">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal">
  Tambah Data Mahasiswaa
</button>
        <h3>
            Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs);?>
                <li class="list-group-item "><?= $mhs['Nama']; ?>
                <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs ['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a></li>
                <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs ['id']; ?>" class="badge badge-primary float-right ml-1">detail</a></li>
                <?php endforeach; ?>
            </ul>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="" id="Nama" class="formcontrol" name="Nama" placeholder="exa">
        </div>

        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" name="" id="nrp" class="formcontrol" name="nrp" placeholder="exa">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="Email" name="" id="Email" class="formcontrol" name="Email" placeholder="exa">
        </div>

        <div class="form-group">
          <label for="Jurusan" id="exa">Jurusan</label>
          <select id="Jurusan" class="form-control" name="Jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Pangan">Teknik Pangan</option>
            <option value="Teknik Planalogi">Teknik Planalogi</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
          </select>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>