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
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white" style="padding-left:100px"; aria-current="page" href="../pages/Home-Umar.php">Home</a>
        <a class="nav-link text-white" aria-current="page" href="../pages/ListCar-Umar.php">MyCar</a>
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
      <div class="row ">
        <div class="col-md">
        <img src="../asset/images/pickup.jpeg" class="card-img-top" style="width: 35rem;" align="right">
        </div>

        <div class="col-lg">
          <form method="post" action="" enctype="multipart/form-data">
            <label class="pb-2" for="judul"><b>Nama Mobil</b></label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Pickup">
            <br>

            <label class="pb-2" for="penulis"><b>Nama Pemilik</b></label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="Nama-NIM" readonly>
            <br>

            <label class="pb-2" for="thn_terbit"><b>Merk</b></label>
            <input type="text" class="form-control" id="thn_terbit" name="thn_terbit"placeholder="Mistsubishi" >
            <br>

            <label class="pb-2" for="thn_terbit"><b>Tanggal Beli</b></label>
            <input type="date" class="form-control" id="thn_terbit" name="thn_terbit"placeholder="11/12/2022" >
            <br>

            <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>

              <div class="pt-3">
                <label for="gambar" class="form-label"><b>Foto</b></label>
                <input class="form-control" type="file" id="gambar" name="gambar" placeholder="Pickup.png">
              </div>
            <br>

              <label  class="form-label pl-1"><b>Status Pembayaran</b></label>
            <br>
            <input type="radio" id="html" name="bahasa" value="Indonesia">
            <label for="Indonesia">&nbsp;Lunas</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="lainnya" name="bahasa" value="Lainnya">
            <label for="lainnya">&nbsp;Belum Lunas</label>
            <br><br>
            <button type="submit" name="submit" class="btn btn-primary" style= "width:200px" href="Umar_Edititem.php">Edit</button>
        </div>
      </div>
    </div>
  </div>
</body>