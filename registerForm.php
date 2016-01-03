<!DOCTYPE html>
<?php
   include "include/koneksi.php";
?>
<html>
   <head>
      <title>Register</title>
   </head>
   <body>
      <form method="post" action="logic/registrasi.php">
         <label for="username">Username :</label>
         <input type="text" maxlength="25" placeholder="username" name="username" required/><br>
         <label for="password">Password :</label>
         <input type="password" maxlength="25" placeholder="password" name="password" required/><br>
         <label for="konfirmasi">Konfirmasi :</label>
         <input type="password" maxlength="25" placeholder="Konfirmasi password" name="konfirmasi" required/><br>
         <label for="kelamin">Kelamin :</label>
         <?php
            $query = "SELECT * FROM kelamin ORDER BY id_kelamin";
         ?>
         <select name="kelamin">
         <?php
            foreach($conn->query($query) as $kelamin)
            {
               echo "<option value='$kelamin[0]'>$kelamin[1]</option>";
            }
         ?>
         </select><br>
         <label for="alamat">Alamat :</label>
         <textarea name="alamat" placeholder="alamat"></textarea><br>
         <button>Daftar</button>
      </form>
      <span>Sudah punya akun? <b><a href="loginForm.php">daftar sekarang!</a></n></span>
   </body>
</html>
