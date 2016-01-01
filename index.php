<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/header.php";
?>
<html>
   <head>
      <title>homepage</title>
   </head>
   <body>
      <span>Selamat datang </span><?php echo $_SESSION['username']?><br>

      <table>
         <tr>
            <td>id barang</td>
            <td>nama barang</td>
            <td>status</td>
         </tr>
         <?php
            $query = "SELECT * FROM barang";

            foreach($conn->query($query) as $barang)
            {
               echo "
                  <td>$barang[0]</td>
                  <td>$barang[1]</td>
                  <td>status</td>
               ";
            }
         ?>
      </table>
   </body>
</html>
