$(function() {

    $('.tombolTambah').on('click', function() {
        $('#formLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilUbah').on('click', function() {
        
        $('#formLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/psw2/belajarmvc2/public/mahasiswa/ubah');


        const nim = $(this).data('nim');
        
        $.ajax({
            url: 'http://localhost/psw2/belajarmvc2/public/mahasiswa/getUbah',
            data: {nim : nim},
            method: 'post',
            dataType: 'json',
            success: function(data){    
                $('#nim').val(data.NIM);
                $('#nama').val(data.Nama);
                $('#prodi').val(data.Prodi);
            }
        });
        

    });



});