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
            <td>no</td>
            <td>nama barang</td>
            <td>status</td>
         </tr>
      </table>
   </body>
</html>
