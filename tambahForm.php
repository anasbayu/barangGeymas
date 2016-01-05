<!DOCTYPE html>
<?php
    include "include/koneksi.php";
    include "include/auth.php";
    // include "include/header.php";
?>
<html>
    <head>
        <title>Tambah Barang</title>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icon.svg"/>
    </head>
    <body>
        <div class="grid-container main-header">
            <div class="grid-12">
                <div class="main-nav">
                    <li><a href="index.php">Beranda</a></li>

                    <?php
                        if(isset($_SESSION['admin'])) {
                            echo '<li class="selected-item"><a href="tambahForm.php">Tambah Barang</a></li>';
                        }
                    ?>

                    <li class="keluar"><a href="logic/logout.php">Keluar</a></li>
                </div>
            </div>
        </div>

        <div class="grid-container main-content">
            <div class="grid-4"></div>

            <div class="grid-4">
                <div class="form-tambah">
                    <div class="form-title">Tambah Barang</div>

                    <div class="form-body">
                        <form method="post" action="logic/tambahBarang.php">
                            <label for="nama_barang">Nama barang</label>
                            <input class="form-input" type="text" maxlength="25" placeholder="nama barang" name="nama_barang" required autofocus/>

                            <button type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="grid-4"></div>

            <!-- <div class="grid-12">
                <div class="">
                    <form method="post" action="logic/tambahBarang.php">
                         <label for="nama_barang">Nama barang</label>
                         <input type="text" maxlength="25" placeholder="nama barang" name="nama_barang" required/><br>

                         <button type="submit">Tambah</button>
                    </form>
                </div>
            </div> -->
        </div>

        <?php include 'include/footer.php' ?>
    </body>
</html>
