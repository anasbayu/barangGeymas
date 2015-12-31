<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "geymasdb";
   $admin = "anas";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   if($conn)
   {
      // Do nothing.
   }
   else
   {
      echo "Gagal koneksi ke database";
   }
?>
