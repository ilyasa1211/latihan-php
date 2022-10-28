$(function (){
    $('.tombolTambah').on('click', function(){
        $('.modal-title').text('Tambah Barang');
        $('.tombolOke').text('Tambah');
    });

    $('.tombolEdit').on('click', function(){
        $('.modal-title').text('Edit Data');
        $('.tombolOke').text('Edit');
        $('.modal-header+form').attr('action', 'http://localhost/MVC/public/barang/edit')
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/MVC/public/barang/get',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#inputNama').val(data.nama_barang);
                $('#inputHarga').val(data.harga_barang);
                $('#inputStok').val(data.stok);
                $('input[name=id]').val(data.id);
            }
    
        });

    });
});


