<?php

include('../config/connector.php');


if (isset($_POST['submit'])){
    $idMobil = rand();
    $mobil = $_POST['nama_mobil'];
    $pemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $tanggal= $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES["foto_mobil"]["name"];
    $temp = $_FILES["foto_mobil"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../asset/images/'.$foto);
    $bayar = $_POST['status_pembayaran'];

    $query = mysqli_query($conn, "INSERT INTO showroom_umar_table(id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$mobil','$pemilik','$merk','$tanggal','$deskripsi','$bayar','$foto')");

    if ($query){
        echo "data berhasil";
    }else {
        echo "Data Gagal Ditambahkan";
    }
}
?>
