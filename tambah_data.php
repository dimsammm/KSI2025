<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO barang (id_barang, nama_barang, harga, stok)
              VALUES ('$id_barang', '$nama_barang', '$harga', '$stok')";
    mysqli_query($koneksi, $query);

    echo "Data barang berhasil ditambahkan!";
}
?>

<form method="post">
    ID Barang: <input type="text" name="id_barang"><br>
    Nama Barang: <input type="text" name="nama_barang"><br>
    Harga: <input type="text" name="harga"><br>
    Stok: <input type="text" name="stok"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>
