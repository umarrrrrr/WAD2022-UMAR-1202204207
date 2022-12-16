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
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <div class="navbar-nav" style="padding-left: 100px;">
        <a style="color: white;" class="nav-link active" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link" style="padding-left: 35px; padding-right:1030px; color: white;"href="ListCar-Umar.php">MyCar</a>
        <a class="btn btn-light" style="font-color:blue;" href="Add-Umar.php" role="button">Add Car</a>
      </div>
    </div>
  </div>
  </nav>

  <div class="container" style="padding-top: 20px;">
      <h4>My Show Room</h4>
      <a>List Show Room Umar - 1202204207</a>   
  </div>

    <br/>
    <div class="container">
    <div class="card" style="width: 18rem;">
    <img src="../asset/images/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $isi['nama_mobil'];?></h5>
            <p class="card-text"><?= $isi['deskripsi'];?></p>
            <div class="row">
                <div class="col">
                    <a href="Detail-Umar.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-primary" name="id">Detail</a>
                </div>

                <div class="col">
                    <a href="../config/delete.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-danger" name="delete">Delete</a> 
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
