$(function() {

    $('document').ready(function(){

    

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');   
        
        console.log('tambah data')
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');  
        $('.modal-body form').attr('action', 'http://localhost/latihan/belajar_mvc/public/mahasiswa/ubah')
        const id = $(this).data('id'); 

        $.ajax({
            url: 'http://localhost/latihan/belajar_mvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});
});