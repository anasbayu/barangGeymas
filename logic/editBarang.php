<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $idBarang = $_POST['id_barang'];
   $namaBarang = $_POST['nama_barang'];
   $idStatus = $_POST['id_status'];

   $query = "UPDATE barang SET nama_barang = '$namaBarang', id_status = '$idStatus' WHERE id_barang = '$idBarang'";

   $exec = $conn->prepare($query);
   $exec->bindparam(":nama_barang", $username);
   $exec->execute();

   header('location: ../index.php');
?>
