<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/auth.php";
   include "include/header.php";

   $nama_barang = $_GET['nama_barang'];
   //$status_barang = $_GET['status_barang'];
   $id_barang = $_GET['id_barang'];
?>

<html>
   <head>
      <title>Tambah barang</title>
   </head>
   <body>
      <form method="post" action="logic/editBarang.php">
         <label for="nama_barang">Nama barang :</label>
         <input type="text" maxlength="25" placeholder="nama barang" name="nama_barang" value='<?php echo "$nama_barang"?>' required/><br>
         <!-- <label for="status_barang">status barang :</label>
         <?php
            $query = "SELECT * FROM status ORDER BY id_status";
         ?>
         <select name="id_status">
         <?php
            foreach($conn->query($query) as $status)
            {
               if($status_barang == $status[0])
               {
                  echo "<option value='$status[0]' selected>$status[1]</option>";
               }
               else
               {
                  echo "<option value='$status[0]'>$status[1]</option>";
               }
            }
         ?>
         </select><br> -->
         <input type="hidden" name="id_barang" value='<?php echo "$id_barang"?>'/>
         <button>Edit</button>
      </form>
   </body>
</html>
