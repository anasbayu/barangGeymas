<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/auth.php";
   include "include/header.php";
?>
<html>
   <head>
      <title>Daftar peminjam</title>
   </head>
   <body>
      <table border="1px">
         <tr>
            <td>No</td>
            <td>Nama peminjam</td>
            <td>Nama barang</td>
         </tr>
         <?php
            $query = "SELECT users.nama_user, barang.nama_barang, transaksi.id_status FROM transaksi JOIN users ON (transaksi.id_user = users.id_user) JOIN barang ON (transaksi.id_barang = barang.id_barang) ORDER BY transaksi.id_transaksi";

            $no = 1;

            if($conn->query($query)->rowCount() != 0)
            {
               foreach($conn->query($query) as $barang)
               {
                  if($barang[2] == 2)
                  {
                     echo "
                     <tr>
                           <td>$no</td>
                           <td>$barang[0]</td>
                           <td>$barang[1]</td>
                     </tr>
                     ";
                     $no++;
                  }
               }
            }
            if($no == 1)
            {
               echo "<tr>
                  <td colspan='3'>Tidak ada barang yang dipinjam</td>
               </tr>";
            }

         ?>
      </table>
   </body>
</html>
