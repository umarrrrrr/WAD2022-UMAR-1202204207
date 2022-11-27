<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    </style>
  </head>
  <body>

  <?php
    include('.\config\connector.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `showroom_umar_table`");
    $jumlah = mysqli_num_rows($query);
  ?>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="index.php">Home</a>
        <?php
          if ($jumlah == 0){
              echo '<a class="nav-link" style="padding-left: 35px; color: white;"href="pages/Add-Umar.php">MyCar</a>';
            }
          else{
              echo '<a class="nav-link" style="padding-left: 35px; color: white;" href="pages/ListCar-Umar.php">MyCar</a>';
            }
        ?>
        <a class="nav-link" style="padding-left: 1000px; color: white;" href="pages/Login-Umar.php" role="button">Login</a>
      </div>
    </div>
  </div>
  </nav>

  <div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col">
            <div>
                <h1 style="padding-top: 25px; font-size:50px;">Selamat Datang Di Showroom Umar</h1>
            </div>
            <div style="padding-top: 10px;">
                <a>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus autem harum obcaecati vel magnam quis.</a>
            </div>
            <div style="padding-top: 30px;">
              <?php
                  if ($jumlah == 0){
                      echo '<a class="btn btn-primary" href="pages/Add-Umar.php" role="button">MyCar</a>';
                    }
                  else{
                      echo '<a class="btn btn-primary" href="pages/ListCar-Umar.php" role="button">MyCar</a>';
                    }
              ?>
            </div>
            <div style="padding-top: 50px;">
                <img src="asset/images/Logo.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                <a style="padding-left: 30px;">Umar_1202204207</a>
            </div>
        </div>
        <div class="col">
            <img src="asset/images/avanza.png" alt="Toyota">
        </div>       
  </div>
    </body>
</html>


