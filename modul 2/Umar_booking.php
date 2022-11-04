<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
</style>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Umar_home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Umar_booking.php">Booking</a>
    </li>
  </ul>
</nav>

<div class="container-fluid mt-3" align="center">
  <h4>Rent your car now!</h4>
</div>

<div class="container">
  <div class="row">
    <div class="col">
    <img src="pickup.jpeg" class="card-img-top">
    </div>
  <div class="col">
  <form action="mybook.php" method="post">
  <div class="form-group mb-3">
    <label for="nama">Name</label>
    <input type="text" class="form-control" name="nama" value="UMAR_1202204207" aria-label="readonly input example" readonly>
  </div>

  <div class="form-outline datepicker mb-3">
    <label for="date">Date</label>
    <input type="date" class="form-control form-icon-trailing" id="date" name="date" placeholder="mm/dd/yyyy"/>
  </div>

  <div class="form-group">
    <label for="time">Start Time</label>
    <input type="time" class="form-control" id="time" name="time" value="">
  </div>
        
  <div class="form-group">
    <label for="duration">Duration (Days) </label>
    <input type="text" class="form-control" id="duration" name="duration" value="">
  </div>

  <div class="form-group">
  <label for="jenis_mobil">Car Type</label>
    <select name="jenis_mobil" class="form-select" aria-label="Default select example" onchange="priceFunction()" id="jenis_mobil">
      <option value="Pickup">Pickup</option>
      <option value="Avanza">Avanza</option>
      <option value="Fortuner">Fortuner</option>
    </select>
  </div>

  <div class="form-group">
    <label for="pwd">Phone Number</label>
    <input type="nomor" class="form-control" id="num" name="num" value="">
  </div>

  <div class="container mt-3">
    <label for="service"> Add Service(s):</label>
    <form action="/action_page.php">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check1" name="service[]" value="something">
        <label class="form-check-label" for="check1">Health Protocol/Rp25.000</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check2" name="service[]" value="something">
        <label class="form-check-label" for="check2">Driver / Rp100.000</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check3" name="service[]" value="something">
        <label class="form-check-label" for="check3">Fuel filled / Rp250.000</label>
      </div>
    </form>
    <div class="d-grid gap-2" style="margin-top : 20px;">
    <input class="btn btn-success" type="submit" value="Book" name="Book">   
  </div>
</div>
</div>

<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3">
    <a>Ibrahim Umar_1202204207</a>
  </div>
</footer>
</body>
</html>
