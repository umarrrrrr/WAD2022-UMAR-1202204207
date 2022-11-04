<?php
$id_data = $_POST['jenis_mobil'];
$id_booking = rand();
$name = $_POST['nama'];
$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$jenis_mobil = $_POST['jenis_mobil'];
$num = $_POST['num'];
$service = $_POST['service'];

$checkin = date('d-m-Y H:i:s', strtotime("$date $time"));

$timestamp = strtotime($date) + strtotime($duration);

$timecheckout = date('H:i', $timestamp);

$checkout = date('d-m-Y H:i:s', strtotime("$date $timecheckout"));

?>
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

<section id="Table">
  <h2 align="center">Thank you <?php echo $name;?> for Reserving</h2>
    <br/>
  <h5 align="center">Please double check your reservation details</h5>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Booking Number</th>
        <th scope="col">Name</th>
        <th scope="col">Check-in</th>
        <th scope="col">Check-Out</th>
        <th scope="col">Car Type</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Service(s)</th>
        <th scope="col">Total Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $id_booking?></th>
        <td><?php echo $name?></td>
        <td><?php echo $checkin?></td>
        <td><?php echo $checkout?></td>
        <td><?php echo $jenis_mobil?></td>
        <td><?php echo $num?></td>
        <td><?php echo $service?></td>
        <td><?php echo $total?></td>
      </tr>
    </tbody>
  </table>
</section>
</body>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3">
    <a>Ibrahim Umar_1202204207</a>
  </div>
</footer>

</html>