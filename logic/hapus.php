<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $idBarang = $_GET['id_barang'];

   $query = "DELETE FROM barang WHERE id_barang = '$idBarang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   header("location: ../index.php");
?>
