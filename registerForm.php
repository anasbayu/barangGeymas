<!DOCTYPE html>
<?php
   include "include/koneksi.php";
?>
<html>
    <head>
        <title>Formulir Pendaftaran</title>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icon.svg"/>
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-4"></div>

            <div class="grid-4">
                <div class="form-signup">
                    <div class="form-title">Formulir Pendaftaran</div>

                    <div class="form-body">
                        <form method="post" action="logic/registrasi.php">
                            <label for="username">Username</label>
                            <input class="form-input" type="text" maxlength="25" placeholder="Username" name="username" required autofocus/>

                            <label for="password">Password</label>
                            <input class="form-input" type="password" maxlength="25" placeholder="Password" name="password" required/>

                            <label for="konfirmasi">Konfirmasi</label>
                            <input class="form-input" type="password" maxlength="25" placeholder="Password" name="konfirmasi" required/><br>

                            <label for="kelamin">Jenis Kelamin</label>

                            <?php
                            $query = "SELECT * FROM kelamin ORDER BY id_kelamin";
                            ?>

                            <select class="form-input" name="kelamin">

                            <?php
                                foreach($conn->query($query) as $kelamin) {
                                    echo "<option value='$kelamin[0]'>$kelamin[1]</option>";
                                }
                            ?>

                            </select>

                            <label for="alamat">Alamat</label>
                            <textarea class="form-input" name="alamat" placeholder="Alamat"></textarea>

                            <button type="submit">Daftar</button>
                        </form>

                        <span>Sudah punya akun? <a href="loginForm.php">Masuk sekarang!</a></span>
                    </div>
                </div>
            </div>

            <div class="grid-4"></div>
        </div>

        <!-- <form method="post" action="logic/registrasi.php">
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
                foreach($conn->query($query) as $kelamin) {
                    echo "<option value='$kelamin[0]'>$kelamin[1]</option>";
                }
            ?>

            </select><br>

            <label for="alamat">Alamat :</label>
            <textarea name="alamat" placeholder="alamat"></textarea><br>

            <button>Daftar</button>
        </form>

        <span>Sudah punya akun? <b><a href="loginForm.php">masuk sekarang!</a></n></span> -->
    </body>
</html>
