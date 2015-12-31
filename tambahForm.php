<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/header.php";
?>
<html>
   <head>
      <title>Tambah barang</title>
   </head>
   <body>
      <form method="post" action="logic/tambahBarang.php">
         <label for="nama_barang">Nama barang :</label>
         <input type="text" maxlength="25" placeholder="nama barang" name="nama_barang" required/><br>
         <button>Tambah</button>
      </form>
   </body>
</html>
