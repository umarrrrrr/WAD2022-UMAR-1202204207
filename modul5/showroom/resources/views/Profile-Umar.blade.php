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
    include_once('..\config\connector.php');
    $query = mysqli_query($connect,"SELECT email FROM `users`");
    $jumlah = mysqli_num_rows($query);
    $ambil = mysqli_query($connect, "SELECT * FROM `users`");
  ?>
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
        <li class="nav-item" style="padding-left:30px;">
            <a class="nav-link" href="../config/logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <form>
      <h1 align="center" style="padding-top:30px;">Profile</h1>
      <?php
    $isi = mysqli_fetch_array($ambil);
        ?>
    <div class="container">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $isi['email'];?>"readonly>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama</label>
          <input type="form" class="form-control" id="exampleInputPassword1" value="<?php echo $isi['nama'];?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No Handphone</label>
            <input type="form" class="form-control" id="exampleInputPassword1" value="<?php echo $isi['no_hp'];?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $isi['password'];?>" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $isi['password'];?>" readonly>
        </div>
        <button type="submit" class="btn btn-primary" style= "width:100px;">Selesai</button>
    </form>
</div>
</body>
</html>