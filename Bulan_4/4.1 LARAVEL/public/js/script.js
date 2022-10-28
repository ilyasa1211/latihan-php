$(function () {

    $('.btn-tambah').on('click', function(){
        $('.modal-title')[0].innerHTML = 'Tambah Barang';
        $('.submit-button')[0].innerHTML = 'Tambah';
        $('.form-core').attr('action', 'add');
        $('.input-nama').val('');
        $('.input-harga').val('');
        $('.input-jumlah').val('');
    });

    $('.btn-edit').on('click', function(){
        const id = $(this).data('id');
        $('.modal-title')[0].innerHTML = 'Ubah Barang';
        $('.submit-button')[0].innerHTML = 'Ubah';
        $('.form-core').attr('action', 'ubah/' + id);
        $.ajax({
            url: 'getById/' + id,
            method: 'get',
            dataType: 'json',
            success: function (data) {
                $('.input-nama').val(data[0].namaBarang);
                $('.input-harga').val(data[0].hargaBarang);
                $('.input-jumlah').val(data[0].jumlahBarang);
            }
        });
    });
});