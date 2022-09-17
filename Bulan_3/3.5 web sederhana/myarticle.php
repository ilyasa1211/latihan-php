<?php
require "central.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }

        ::-webkit-scrollbar {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3F4E4F;
        }

        .container {
            width: 100%;
            height: 100%;
            background-color: cadetblue;
            position: fixed;
            /* display: flex; */
            /* flex-direction: column; */
        }

        nav {
            background-color: #B1B2FF;
            height: 8%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        nav button[type=submit] {
            padding: 15px 30px;
            background-color: #EEF1FF;
            border-style: none;
        }

        .kartu {
            padding: 10px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #D2DAFF;
            box-sizing: content-box;
            overflow-x: hidden;
            box-shadow: 0 10px #3F4E4F;
        }

        .tengah {
            padding: 10px;
            margin: auto;
            max-width: 600px;
            height: 100%;
            overflow-y: scroll;
        }

        .judul,
        .kategori {
            box-sizing: border-box;
            float: left;
            word-wrap: break-word;
            overflow: hidden;
        }

        .tanggal,
        .penulis {
            padding: 10px;
            /* float:right; */
        }

        .judul {
            width: 80%;
            padding: 20px;
            font-size: 30px;
        }

        .nama {
            width: 100%;
            border-radius: 8px;
            background-color: darkseagreen;
            /* padding: 10px; */
            display: flex;
            justify-content: space-between;
        }

        .kategori {
            width: 20%;
            text-align: center;
            font-size: 20px;
            background-color: lightsteelblue;
            border-radius: 50px;
            padding: 5px;
        }

        button[name=edit],
        button[name=hapus] {
            padding: 10px;
            background-color: darkseagreen;
            border-style: none;
        }

        button[name=edit]:hover,
        button[name=hapus]:hover {
            background-color: aliceblue;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .kartu:hover {
            background-color: lightgreen;
            /* opacity: 0.5; */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="tengah">
            <?php $pdo->showMine(); ?>
        </div>
    </div>
</body>

</html>