<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/header.php";
   include "include/auth.php";
?>
<html>
   <head>
      <title>homepage</title>
   </head>
   <body>
      <span>Selamat datang </span><?php echo $_SESSION['username']?><br>

      <table border="1px">
         <tr>
            <td>Id barang</td>
            <td>Nama barang</td>
            <td>Status</td>
            <td>Aksi</td>
         </tr>
         <?php
            $query = "SELECT barang.id_barang, barang.nama_barang, status.nama_status, barang.id_status FROM barang JOIN status ON (barang.id_status = status.id_status) ORDER BY barang.id_barang";

            foreach($conn->query($query) as $barang)
            {
               echo "
               <tr>
                     <td>$barang[0]</td>
                     <td>$barang[1]</td>
                     <td>$barang[2]</td>
               ";

               if(!isset($_SESSION['admin']))
               {
                  echo "<td><a href='logic/pinjam.php?id_barang=$barang[0]'>pinjam</a></td>";
               }
               else
               {
                  echo "<td><a href='editForm.php?nama_barang=$barang[1]&status_barang=$barang[3]&id_barang=$barang[0]'>edit</a></td>";
               }
               echo "</tr>";
            }
         ?>
      </table>
   </body>
</html>
