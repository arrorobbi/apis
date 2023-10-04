<?php
require 'functions.php';

$id = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE ID = $id")[0];
if(isset($_POST["submit"])){

    if(ubah($_POST) > 0){
        echo "<script>
            alert('data updated!');
            document.location.href = 'index.php';
        </script>";
    } else{
        echo "<script>
        alert('data failed to update!');
        document.location.href = 'index.php';
    </script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update data produk </title>
  </head>
  <body>
  <h1>Update data Produk</h1>
        <form action="" method="post">
            <ul>
            <li>
                    <label for="ID">ID Produk</label>
                    <input type="text" name="ID" id="ID" required value="<?= $produk["ID"]?>">
                </li>
                <li>
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" value="<?= $produk["nama_produk"]?>">
                </li>
                <li>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" value="<?= $produk["keterangan"]?>">                    
                </li>
                <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="<?= $produk["harga"]?>"> 
                </li>
                <li>
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" value="<?= $produk["jumlah"]?>"> 
                </li>
                <li>
                    <button type="submit" name="submit">Update DATA</button>
                </li>
            </ul>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>