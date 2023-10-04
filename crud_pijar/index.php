<?php

require 'functions.php';
// $result = mysqli_query($conn, "SELECT * FROM produk");
$produk = query("SELECT * FROM produk");

// while ($prod = mysqli_fetch_assoc($result)){
//     var_dump($prod);
// };
// ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Admin</title>
  </head>
  <body><h1>Data Produk</h1>
            <a href="tambah.php">Tambah Data</a>

            <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Keterangan </th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <?php $i= 1;?>
            <?php foreach($produk as $row): ?>
                <tr>
                <td><?=$i?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["ID"]?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row["ID"]; ?>" onclick="return confirm('confirm?')" >Delete</a>
                </td>
                <td><?=$row["ID"]?></td>
                <td><?=$row["nama_produk"]?></td>
                <td><?=$row["keterangan"]?></td>
                <td><?=$row["harga"]?></td>
                <td><?=$row["jumlah"]?></td>
            </tr>
            <?php $i++;?>
                <?php endforeach;?>
            </table>
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>