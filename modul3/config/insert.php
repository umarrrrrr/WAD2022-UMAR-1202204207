<?php

include('..\config\connector.php');
if (isset($_POST['submit'])){
    $idMobil = rand();
    $mobil = $_POST['mobil'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal= $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $bayar = $_POST['statusbayar'];
    $submit = $_POST['submit'];

    $foto = $_FILES["foto"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../asset/images/'.$foto);

    $query = mysqli_query($conn, "INSERT INTO showroom_umar_table(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$mobil','$pemilik','$merk','$tanggal','$deskripsi','$bayar','$foto')");

    if ($query){
        header('Location: ..\pages\Add-Umar.php');
    }
}
?>
