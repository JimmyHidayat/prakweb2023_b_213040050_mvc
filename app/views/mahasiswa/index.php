<div class="container mt-5" >

<div class="row">
    <div class="col-6">
        <h3>
            Daftar Mahasiswa
            <?php foreach ($data['mhs'] as$hms);?>
            <ul>
                    <li><?= ($hms['Nama']):?></li>
                    <li><?= ($hms['Nrp']):?></li>
                    <li><?= ($hms['Email']):?></li>
                    <li><?= ($hms['Jurusan']):?></li>

            </ul>
        </h3>
        <?php endforeach;?>
    </div>
</div>
</div>