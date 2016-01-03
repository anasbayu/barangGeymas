<?php
   session_start();
   include "../include/koneksi.php";

   $reg = $_GET['reg'];
   if(isset($reg))
   {
      $username = $_GET['username'];
      $password = $_GET['password'];
   }
   else
   {
      $username = $_POST['username'];
      $password = $_POST['password'];
   }

   $query = "SELECT * FROM users WHERE nama_user = '$username' AND password = '$password'";

   $exec = $conn->prepare($query);
   $exec->bindparam(":username", $username);
   $exec->bindparam(":password", $password);
   $exec->execute();

   $data = $exec->fetch(PDO::FETCH_ASSOC);

   if($exec->rowCount() > 0)
   {
      $_SESSION['username'] = $data['nama_user'];
      if($data['nama_user'] == $admin)
      {
            $_SESSION['admin'] = true;
      }
      header('location: ../index.php');
   }
   else
   {
      echo "gagal login";
      header('location: ../loginForm.php');
   }
?>
