<!DOCTYPE html>
<html>
    <head>
        <title>Masuk Aplikasi</title>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icon.svg"/>
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-4"></div>

            <div class="grid-4">
                <div class="form-login">
                    <div class="form-title">Masuk ke Aplikasi</div>

                    <div class="form-body">
                        <form method="post" action="logic/login.php">
                            <!-- <label for="username">Username</label> -->
                            <input class="form-input" type="text" maxlength="25" placeholder="username" name="username" required autofocus/><br>

                            <!-- <label for="password">Password</label> -->
                            <input class="form-input" type="password" maxlength="25" placeholder="password" name="password" required/><br>

                            <button type="submit">Masuk</button>
                        </form>

                        <span>Belum punya akun? <a href="registerForm.php">Daftar sekarang!</a></span>
                    </div>
                </div>
            </div>

            <div class="grid-4"></div>
        </div>
    </body>
</html>
