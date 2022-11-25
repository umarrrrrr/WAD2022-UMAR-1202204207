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
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white" style="padding-left:100px"; aria-current="page" href="./pages/index.php">Home</a>
        <a class="nav-link text-white" aria-current="page" href="./pages/ListCar-Umar.php">MyCar</a>
      </div>
    </div>
  </div>
</nav>


  <div class="container">
    <div class="row pt-5">
    <div class="p"><h2>(Nama Mobil)</h></div>
    <br>
    <div class="p">Detail (Nama Mobil)</div>
    <br><br>
    </div>
    
    <?php

include('../config/connector.php');


// include('../config/connector.php');

$id = $_GET['id_mobil'];
$getData = mysqli_query($conn,"SELECT * FROM showroom_umar_table WHERE id_mobil = $id");
$jumlahData = mysqli_num_rows($getData);
$detailMobil = mysqli_fetch_array($getData) or die("line 50 not working");
$foto = $detailMobil['foto_mobil'];
// echo $detailMobil['foto_mobil'];

?>
      <div class="row ">
        <div class="col-md">
        <img src="../asset/images/pickup.jpeg" class="card-img-top" style="width: 35rem;" align="right">
        </div>

        <div class="col-lg">
          <form method="post" action="" enctype="multipart/form-data">
            <label class="pb-2" for="judul"><b>Nama Mobil</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['nama_mobil'];?>">
            <br>

            <label class="pb-2" for="penulis"><b>Nama Pemilik</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['pemilik_mobil'];?>">
            <br>

            <label class="pb-2" for="thn_terbit"><b>Merk</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['merk_mobil'];?>">
            <br>

            <label class="pb-2" for="thn_terbit"><b>Tanggal Beli</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['tanggal_beli'];?>">
            <br>

            <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
            <textarea class="form-control border border-3" id="exampleFormControlTextarea1" rows="3" ><?= $detailMobil['deskripsi'];?></textarea>

              <div class="pt-3">
                <label for="gambar" class="form-label"><b>Foto</b></label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['foto_mobil'];?>">
              </div>
            <br>

              <label  class="form-label pl-1"><b>Status Pembayaran</b></label>
            <br>
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?= $detailMobil['statusbayar'];?>">
            <label for="Indonesia">&nbsp;Lunas</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?= $detailMobil['statusbayar'];?>">
            <label for="lainnya">&nbsp;Belum Lunas</label>
            <br><br>

            <a href="Edit-Umar.php" class="btn btn-primary">Edit</a>
        </div>
      </div>
    </div>
  </div>
</body>