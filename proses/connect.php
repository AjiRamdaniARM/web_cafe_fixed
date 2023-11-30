<?php
    $conn = mysqli_connect("localhost", "root", "", "db_oniichan");
    if(!$conn){
        echo "gagal koneksi";
    }
?>