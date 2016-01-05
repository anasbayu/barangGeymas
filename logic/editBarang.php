<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $id_barang = $_POST['id_barang'];
   $nama_barang = $_POST['nama_barang'];
   // $id_status = $_POST['id_status'];

   $query = "UPDATE barang SET nama_barang = '$nama_barang' WHERE id_barang = '$id_barang'";

   $exec = $conn->prepare($query);
   $exec->execute();

   // Jika barang dikembaliin (Tersedia), hapus dari transaksi.
   // if($id_status == 1)
   // {
   //    $query = "DELETE FROM transaksi WHERE id_barang = '$id_barang'";
   //
   //    $exec = $conn->prepare($query);
   //    $exec->execute();
   // }
   // jika dipinjam, update tabel transaksi.
   // else if($id_status == 2)
   // {
   //    $query = "INSERT INTO transaksi (id_user, id_barang, id_status) VALUE (1, '$id_barang', '$id_status')";
   //
   //    $exec = $conn->prepare($query);
   //    $exec->execute();
   // }
   // else
   // {
   //    $query = "UPDATE transaksi SET id_status = '$id_status' WHERE id_barang = '$id_barang'";
   //
   //    $exec = $conn->prepare($query);
   //    $exec->execute();
   // }

   header('location: ../index.php');
?>
