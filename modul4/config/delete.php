<?php
        include ('..\config\connector.php');

        $id_mobil=$_GET['id_mobil'];
        $query="DELETE FROM showroom_umar_table WHERE id_mobil=$id_mobil";
        mysqli_query($connect, $query);
        if ($query){
            header('Location: ..\pages\ListCar-Umar.php');
        }


        ?>