<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Masuk</title>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icon.svg"/>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-4"></div>

            <div class="grid-4">
                <div class="form-login">
                    <div class="form-title">Formulir Masuk</div>

                    <div class="form-body">
                        <form method="post" action="logic/login.php">
                            <!-- <label for="username">Username</label> -->
                            <input class="form-input" type="text" maxlength="25" placeholder="Username" name="username" required autofocus/>

                            <!-- <label for="password">Password</label> -->
                            <input class="form-input" type="password" maxlength="25" placeholder="Password" name="password" required/>

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
