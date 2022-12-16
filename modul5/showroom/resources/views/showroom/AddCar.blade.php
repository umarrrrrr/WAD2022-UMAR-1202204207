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

  <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/showroom">Mycar</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
   
  <div class="container" style="padding-top: 30px;">
      <h4>Tambah Mobil</h4>
      <a>Tambah Mobil Baru Anda Ke List Showroom</a>
      @csrf
      <div style="padding-top: 35px;">
          <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input class="form-control" name="nama_mobil" id="nama_mobil" type="text" placeholder="Avanza">
            </div>

            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label">Nama Pemilik</label>
                <input class="form-control" name="pemilik_mobil" id="pemilik_mobil" type="text" placeholder="Umar - 1202204207">
            </div>

            <div class="mb-3">
                <label for="merk_mobil" class="form-label">Merk</label>
                <input class="form-control" name="merk_mobil" id="merk_mobil" type="text" placeholder="Toyota">
            </div>

            <div class="mb-3">
                <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                <input class="form-control" name="tanggal_beli" id="tanggal_beli" type="date" placeholder="01/01/2022">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium porro laborum mollitia neque ducimus rem quae autem voluptatem sapiente dolorem et dolor temporibus commodi, inventore architecto reiciendis, soluta corporis voluptas?"></textarea>
            </div>

            <div class="mb-3">
                <label for="foto_mobil" class="form-label">Foto</label>
                <input class="form-control" id="foto" type="file" name="foto_mobil">
            </div>

            <label for="status_pembayaran">Status Pembayaran</label></br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas">
                <label class="form-check-label" for="Lunas">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum Lunas">
                <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
            </div>
            
            <div style="padding-top: 30px;">
            <button type="submit" class="btn btn-primary" role="button" name="submit">Selesai</button>
            </div>
      </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>