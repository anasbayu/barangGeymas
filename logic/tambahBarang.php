<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $namaBarang = $_POST['nama_barang'];

   $query = "INSERT INTO barang (nama_barang, id_status) VALUE ('$namaBarang', 1)";

   $exec = $conn->prepare($query);
   $exec->bindparam(":nama_barang", $username);
   $exec->execute();

   header('location: ../index.php');
?>
