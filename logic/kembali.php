<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_GET['id_barang'];
   $id_status = 1;

   $query = "UPDATE barang SET id_status = '$id_status' WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   $query = "DELETE FROM transaksi WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   header('location: ../index.php');
?>
