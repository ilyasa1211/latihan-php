<?php
require "CRUD.php";

?>

<html>

<head>
    <title>Document</title>
    <style>
        .hidden{
            display : none;
        }
    </style>
</head>

<body>
    <form action="CRUD.php" method="post">
        <label for="namaOrang">Nama</label>
        <input type="text" id="namaOrang" name="namaOrang" placeholder="Masukkan nama " autofocus/>
        <button type="submit" name="submit">KIRIM</button>
    </form>
    <br /><br />
    <table class="table-post" border="1" cellspacing="0" cellpadding="5">
        <thead class="post">
            <th>No</th>
            <th>Nama</th>
            <th>Hapus</th>
            <th>Edit</th>
        </thead>
        <tbody>
            <?php
            $pdo->showData();
            ?>
        </tbody>
    </table>
    <script>
        function edit(a){
            document.getElementById("hapus"+a).removeAttribute("name");
            document.getElementById("n"+a).removeAttribute("disabled");
        }
    </script>
</body>

</html>