<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_GET['id_barang'];
   $id_status = $_GET['id_status'];

   $query = "UPDATE barang SET id_status = '$id_status' WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   // jika ditolak.
   if($id_status == 1)
   {
      $query = "DELETE FROM transaksi WHERE id_barang = '$id_barang'";

      $exec = $conn->prepare($query);
      $exec->execute();
   }
   // Jika disetuji.
   else
   {
      $query = "UPDATE transaksi SET id_status = '$id_status' WHERE id_barang = '$id_barang'";

      $exec = $conn->prepare($query);
      $exec->execute();
   }

   header('location: ../index.php');
?>
