<?php
include '../config/connector.php';
?>

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
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid px-5">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="padding-left:30px; padding-right:30px" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="padding-right:1030px";>MyCar</a>
        </li>
        <li class="btn btn-light" style="font-color:blue" href="Add-Umar.php" role="button">Add car
        </li>
        <li class="nav-item dropdown" style="padding-left:30px;">
          <a class="btn btn-light nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            (nama)
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <form>
      <h1 align="center" style="padding-top:30px;">Profile</h1>
    <div class="container">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary" style= "width:100px;">Selesai</button>
    </form>
    </div>
</body>