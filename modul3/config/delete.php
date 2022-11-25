<?php
include('../config/connector.php');

$id = $_GET['id_mobil'];

$sql = "DELETE FROM showroom_umar_table WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
        } else {
                        echo "Error deleting record: " . mysqli_error($conn);
                }                
?>