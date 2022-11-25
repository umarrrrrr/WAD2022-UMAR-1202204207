<?php
    $host="localhost:3308";
    $user="root";
    $password="";
    $db="modul3";
    
    $conn = mysqli_connect($host,$user,$password,$db);
    if (!$conn){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>