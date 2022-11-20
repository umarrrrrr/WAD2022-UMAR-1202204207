<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    include('..\config\connector.php');
    $query = mysqli_query($conn,"SELECT id_mobil FROM `showroom_umar_table`");
    $itung = mysqli_num_rows($query);

    $ambil = mysqli_query($conn, "SELECT * FROM `showroom_umar_table`");
    ?>
<nav class="navbar navbar-expand-lg bg-primary justify-content-sm-center font-color:white">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav">
        <a class="nav-link text-white" style="padding-left:100px"; aria-current="page" href="../pages/Home-Umar.php">Home</a>
        <a class="nav-link text-white" aria-current="page" href="../pages/ListCar-Umar.php">MyCar</a>
      </div>
      <button class="btn btn-light" style="width:150px;" href="../pages/Add-Umar.php">Add Car</button>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row pt-5">
    <div class="p"><h2>My Show Room</h></div>
    <br>
    <div class="p">List Show Room Umar_1202204207</div>
    <br><br>

  <div class="row">
  <div class="col-sm-4">
    <div class="card">
    <img src="../asset/images/fortuner.jpeg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Toyota Fortuner</h5>
        <p class="card-text">mobil ini mau dijual nantinya</p>
        <a href="Umar_ItemDetail.php" class="btn btn-primary">Detail</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="../asset/images/fortuner.jpeg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Toyota Fortuner</h5>
        <p class="card-text">mobil ini mau dijual nantinya</p>
        <a href="Umar_ItemDetail.php" class="btn btn-primary">Detail</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="../asset/images/fortuner.jpeg" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title">Toyota Fortuner</h5>
        <p class="card-text">mobil ini mau dijual nantinya</p>
        <a href="Umar_ItemDetail.php" class="btn btn-primary">Detail</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>