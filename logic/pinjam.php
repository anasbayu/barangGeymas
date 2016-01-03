<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_GET['id_barang'];
   $id_user = $_GET['id_user'];

   $query = "UPDATE barang SET id_status = 3 WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   $query = "INSERT INTO transaksi (id_user, id_barang, id_status) VALUE('$id_user', '$id_barang', 3)";

   $exec = $conn->prepare($query);
   $exec->execute();

   header("location: ../index.php");
?>
