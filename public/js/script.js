$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').hyml('Tambah Data');
    });
    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').hyml('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: "http://localhost/phpmvc/public/mahasiswa/getubah'",
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#Nama').val(data.Nama);
                $('#nrp').val(data.nrp);
                $('#Email').val(data.Email);
                $('#id').val(data.id);
            }
        });
    });