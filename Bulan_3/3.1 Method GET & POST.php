<!DOCTYPE html>

<head>
    <title>3.1</title>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td><input type="text" id="nama_barang" name="nama_barang" /></td>
            </tr>
            <tr>
                <td><label for="harga_barang">Harga</label></td>
                <td><input type="text" id="harga_barang" name="harga_barang" /></td>
            </tr>
        </table>
        <input type="submit" value="OK">
    </form>
    <br />
    <form method="GET">
        <table>
            <tr>
                <td><label for="nama_kurir">Nama Kurir</label></td>
                <td><input type="text" id="nama_kurir" name="nama_kurir" /></td>
            </tr>
            <tr>
                <td><label for="nama_pengirim">Nama Pengirim</label></td>
                <td><input type="text" id="nama_pengirim" name="nama_pengirim" /></td>
            </tr>
            <tr>
                <td><label for="asal_barang">Asal Barang</label></td>
                <td>
                    <select name="asal_barang">
                        <option>Jawa</option>
                        <option>Sumatera</option>
                        <option>Kalimantan</option>
                        <option>Sulawesi</option>
                        <option>Papua</option>
                        <option>Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tujuan_barang">Tujuan</label></td>
                <td><input type="text" id="tujuan_barang" name="tujuan_barang" /></td>
            </tr>
        </table>
        <input type="submit" value="KIRIM">
    </form>
    <br /><br />
    <p>
        <?php echo "Nama Barang : " . $_POST["nama_barang"]; ?>
    </p>
    <p>
        <?php echo "Harga : " . $_POST["harga_barang"]; ?>
    </p>
    <p>
        <?php echo "Nama Kurir : " . $_GET["nama_kurir"]; ?>
    </p>
    <p>
        <?php echo "Nama Pengirim : " . $_GET["nama_pengirim"]; ?>
    </p>
    <p>
        <?php echo "Asal Barang : " . $_GET["asal_barang"]; ?>
    </p>
    <p>
        <?php echo "Tujuan : " . $_GET["tujuan_barang"]; ?>
    </p>
</body>

</html>