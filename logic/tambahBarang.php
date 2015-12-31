<?php
   session_start();
   include "../include/koneksi.php";

   $namaBarang = $_POST['nama_barang'];

   $query = "INSERT INTO barang (nama_barang) VALUE ('$namaBarang')";

   $exec = $conn->prepare($query);
   $exec->bindparam(":nama_barang", $username);
   $exec->execute();

   header('location: ../index.php');
?>
