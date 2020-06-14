$(document).ready(function(){

    $('.tambahdata').on('click', function(){
        $('#judulmodal').html('Tambah Data Siswa');
        $('.kirimdata').html('Tambah Data');
        $('#nama').val('');
        $('#nis').val('');
        $('#email').val('');
        $('#jurusan').val('');
    });

    $('.ubahdataform').on('click', function(){
        $('#judulmodal').html('Ubah Data Siswa');
        $('.kirimdata').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubahsiswa');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            method: 'post',
            data: {id : id},
            dataType :'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});
 