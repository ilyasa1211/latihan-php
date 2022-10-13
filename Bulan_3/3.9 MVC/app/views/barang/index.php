<div class="container">
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light tombolTambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Barang
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="http://localhost/MVC/public/barang/tambah" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <label for="inputNama" class="col-form-label">Nama Barang</label>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <input type="text" class="form-control" id="inputNama" name="namaBarang">
                            </div>
                        </div>
                        <label for="inputHarga" class="col-form-label">Harga Barang</label>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <input type="number" class="form-control" id="inputHarga" name="hargaBarang">
                            </div>
                        </div>
                        <label for="inputStok" class="col-form-label">Stok</label>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <input type="number" class="form-control" id="inputStok" name="stok">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark tombolOke">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <table class="mt-5 table table-dark table-striped">
        <thead>
            <th>#</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
        <tbody>
            <form action="http://localhost/MVC/public/barang/hapus" method="get">
                <?php $a = 1; ?>
                <?php foreach ($data['barang'] as $dat) : ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $dat['nama_barang'] ?></td>
                        <td><?= $dat['harga_barang'] ?></td>
                        <td><?= $dat['stok'] ?></td>
                        <td>
                            <button type="button" class="btn btn-light tombolEdit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$dat['id']?>">Edit</button>
                        </td>
                        <td>
                            <button name="id" value="<?= $dat['id'] ?>" type="submit" class="btn btn-light">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </form>
        </tbody>
    </table>
</div>