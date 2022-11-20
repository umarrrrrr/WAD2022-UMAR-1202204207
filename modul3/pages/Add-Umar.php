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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <?php
  include('..\config\connector.php');
  $query = mysqli_query($conn,"SELECT id_mobil FROM `showroom_umar_table`");
  $jumlah = mysqli_num_rows($query);
    
  $ambil = mysqli_query($conn, "SELECT * FROM `showroom_umar_table`");
  ?>

<nav class="navbar navbar-expand bg-primary text-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white" style="padding-left:100px;" aria-current="page" href="../pages/Home-Umar.php">Home</a>
        <?php
        if ($jumlah == 0){
          echo '<a class="nav-link text-white" href=".\Add-Umar.php">My Car</a>';
        }
        else{ 
          echo '<a class="nav-link text-white" href=".\ListCar-Umar.php">My Car</a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>

<body>
  <div class="container">
    <div class="row pt-5">
    <div class="p"><h2>Tambah Mobil</h></div>
    <br>
    <div class="p">Tambah Mobil Baru Anda ke List Show Room</div>
    <br><br>
    </div>
     
    <div class="row">
      <div class="col">
        <form method="post" action="insert.php" enctype="multipart/form-data">
          <label class="pb-2" for="judul"><b>Nama Mobil</b></label>
          <input type="text" class="form-control" id="mobil" name="mobil" placeholder="Pickup">
          <br>

          <label class="pb-2" for="penulis"><b>Nama Pemilik</b></label>
          <input type="text" class="form-control" id="pemilik" name="pemilik" value="Umar_1202204207" readonly>
          <br>

          <label class="pb-2" for="thn_terbit"><b>Merk</b></label>
          <input type="text" class="form-control" id="merk" name="merk" placeholder="Mitsubishi" >
          <br>

          <label class="pb-2" for="thn_terbit"><b>Tanggal Beli</b></label>
          <input type="text" class="form-control" id="tanggal" name="tanggal"placeholder="11/12/2022" >
          <br>

          <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>

            <div class="pt-3">
              <label for="gambar" class="form-label"><b>Foto</b></label>
              <input class="form-control" type="file" id="foto" name="foto" placeholder="Pickup.png" required>
            </div>
          <br>

            <label  class="form-label pl-1"><b>Status Pembayaran</b></label>
            <br>
            <input type="radio" id="lunas" name="bayar" value="lunas">
            <label for="Indonesia">&nbsp;Lunas</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="belum" name="bayar" value="belum">
            <label for="lainnya">&nbsp;Belum Lunas</label>
            <br><br>

            <button type="submit" name="submit" class="btn btn-primary" style= "width:200px">Selesai</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>