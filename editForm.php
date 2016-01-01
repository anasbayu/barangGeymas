<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/header.php";
   include "include/auth.php";

   $nama_barang = $_GET['nama_barang'];
   $status_barang = $_GET['status_barang'];
   $id_barang = $_GET['id_barang']
?>

<html>
   <head>
      <title>Tambah barang</title>
   </head>
   <body>
      <form method="post" action="logic/editBarang.php">
         <label for="nama_barang">Nama barang :</label>
         <input type="text" maxlength="25" placeholder="nama barang" name="nama_barang" value='<?php echo "$nama_barang"?>' required/><br>
         <label for="status_barang">status barang :</label>
         <input type="text" maxlength="25" placeholder="Status barang" name="id_status" value='<?php echo "$status_barang"?>' required/><br>
         <input type="hidden" name="id_barang" value='<?php echo "$id_barang"?>'/>
         <button>Edit</button>
      </form>
   </body>
</html>
