<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_GET['id_barang'];

   $query = "UPDATE barang SET id_status = 3 WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   header("location: ../index.php");
?>
