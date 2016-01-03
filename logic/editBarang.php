<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_POST['id_barang'];
   $nama_barang = $_POST['nama_barang'];
   $id_status = $_POST['id_status'];

   $query = "UPDATE barang SET nama_barang = '$nama_barang', id_status = '$id_status' WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   header('location: ../index.php');
?>
