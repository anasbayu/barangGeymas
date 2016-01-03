<?php
   include "../include/koneksi.php";
   include "../include/auth.php";

   $username = $_POST['username'];
   $password = $_POST['password'];
   $konfirmasi = $_POST['konfirmasi'];
   $kelamin = $_POST['kelamin'];
   $alamat = $_POST['alamat'];

   if($password == $konfirmasi)
   {
      $query = "INSERT INTO users (nama_user, password, id_kelamin, alamat_user) VALUE ('$username', '$password', '$kelamin', '$alamat')";

      $exec = $conn->prepare($query);
      $exec->execute();

      header("location: login.php?reg=1&username=$username&password=$password");
   }
   else
   {
      echo "gagal";
   }
?>
