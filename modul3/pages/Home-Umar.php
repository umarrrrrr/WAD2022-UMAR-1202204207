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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <?php
    include('.\config\connector.php');
    $query = mysqli_query($conn,"SELECT id_mobil FROM `showroom_umar_table`");
    $jumlah = mysqli_num_rows($query);
    
    $ambil = mysqli_query($conn, "SELECT * FROM `showroom_umar_table`");
    ?>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white" style="padding-left:100px;" aria-current="page" href="./pages/index.php">Home</a>
        <?php
        if ($jumlah == 0){
          echo '<a class="nav-link text-white" href="./pages/Add-Umar.php">My Car</a>';
        }
        else{ 
          echo '<a class="nav-link text-white" href="./pages/ListCar-Umar.php">My Car</a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>
<div class="container-lg my-5 pt-5">
  <div class="row pt-5">
    <div class="col-lg">
    <div class="p"><h1>Selamat Datang Di Show Room Umar</h></div>
    <br>
    <div class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corrupti quibusdam quis repudiandae temporibus, ad natus. Esse perspiciatis sint totam eveniet minus nam harum ex iste. Laborum reprehenderit, iste commodi quis assumenda ut.</div>
    <br>
    <?php
        if ($jumlah == 0) {
      echo '<a class="nav-link active btn btn-primary" type="button" href="pages/Add-Umar.php">MyCar</a>';
      } else {
      echo '<a class="nav-link active btn btn-primary" type="button"href="pages/ListCar-Umar.php">MyCar</a>';
      }
      
      ?>
    <br><br><br>
    <img src="./asset/images/Logo.png"> &nbsp;&nbsp;<a>Umar_1202204207</a>
    </div>
    <div class="col">
    <img src="./asset/images/pickup.jpeg" class="card-img-top" style="width: 35rem;" align="right">
    </div>

</body>
</html>
