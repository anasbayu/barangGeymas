<!DOCTYPE html>
<html>
   <head>
      <title>Login</title>
   </head>
   <body>
      <form method="post" action="logic/login.php">
         <label for="username">Username :</label>
         <input type="text" maxlength="25" placeholder="username" name="username" required/><br>
         <label for="password">Password :</label>
         <input type="password" maxlength="25" placeholder="password" name="password" required/><br>
         <button>Masuk</button>
      </form>
      <span>Belum punya akun? <b><a href="registerForm.php">daftar sekarang!</a></n></span>
   </body>
</html>
