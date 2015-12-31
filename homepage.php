<!DOCTYPE html>
<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
      header('location: loginView.php');
   }
   else
   {
      // Do nothing.
   }
   include "include/koneksi.php";
?>
<html>
   <head>
      <title>homepage</title>
   </head>
   <body>
      <span>Selamat datang </span><?php echo $_SESSION['username']?>
      <p>Hello</p>
   </body>
</html>
