<?php

$conn = mysqli_connect("localhost", 
"root", 
"", 
"pijarcamp");

function query($query){
    global $conn;
    $result=mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
};


function tambah($data){
    global $conn;
    $ID = htmlspecialchars($data["ID"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO produk
    VALUES
    ('$ID', '$nama_produk', '$keterangan', '$harga', '$jumlah')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
};


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE ID = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $ID = htmlspecialchars($data["ID"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE produk SET 
            ID = '$ID',
            nama_produk = '$nama_produk',
            keterangan = '$keterangan',
            harga = $harga,
            jumlah = $jumlah
            WHERE id =$ID";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}


?>