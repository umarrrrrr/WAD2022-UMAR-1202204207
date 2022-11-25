<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
</style>
<body>
<?php


  include('../config/connector.php');
  $getData = mysqli_query($conn,"SELECT * FROM `showroom_umar_table`");
  $jumlahData = mysqli_num_rows($getData);
  ?>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link text-white" style="padding-left:100px;" aria-current="page" href="./pages/Home-Umar.php">Home</a>
        <a class="nav-link text-white" aria-current="page" href="./pages/ListCar-Umar.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>

<body>
  <div class="container">
    <div class="row pt-5">
    <div class="p"><h2>Edit (Nama Mobil)</h></div>
    <br>
    <div class="p">Edit (Nama Mobil)</div>
    <br><br>
    </div>
    <div class="row ">
        <div class="col-md">
        <img src="../asset/images/<?php echo $jumlahData['foto_mobil'];?>" class="card-img-top rounded" alt="mobil" width="Automatic" height="310" >
        </div>

      <div class="col">
        <form method="post" action="" enctype="multipart/form-data">
          <label class="pb-2" for="exampleInputEmail1"><b>Nama Mobil</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <br>

          <label class="pb-2" for="exampleInputEmail1"><b>Nama Pemilik</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <br>

          <label class="pb-2" for="exampleInputEmail1"><b>Merk</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <br>

          <label class="pb-2" for="exampleInputEmail1"><b>Tanggal Beli</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <br>

          <label for="exampleInputEmail1" class="form-label"><b>Deskripsi</b></label>
          <textarea class="form-control border border-3" id="exampleFormControlTextarea1" rows="3"></textarea>

            <div class="pt-3">
              <label for="exampleInputEmail1" class="form-label"><b>Foto</b></label>
              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          <br>

            <label  for="exampleInputEmail1" class="form-label pl-1"><b>Status Pembayaran</b></label>
            <br>
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label for="inlineRadio1">&nbsp;Lunas</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label for="inlineRadio2">&nbsp;Belum Lunas</label>
            <br><br>
            <button type="submit" name="submit" class="btn btn-primary" style= "width:200px">Simpan</button>
</div>