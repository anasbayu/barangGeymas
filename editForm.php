<!DOCTYPE html>
<?php
   include "include/koneksi.php";
   include "include/auth.php";
   // include "include/header.php";

   $nama_barang = $_GET['nama_barang'];
   $status_barang = $_GET['status_barang'];
   $id_barang = $_GET['id_barang']
?>

<html>
    <head>
        <title>Ubah barang</title>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/icon.svg"/>
    </head>
    <body>
        <div class="grid-container main-header">
            <div class="grid-12">
                <div class="main-nav">
                    <li class="selected-item"><a href="index.php">Beranda</a></li>

                    <?php
                        if(isset($_SESSION['admin'])) {
                            echo '<li><a href="tambahForm.php">Tambah Barang</a></li>';
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
                    <div class="form-title">Ubah Barang</div>

                    <div class="form-body">
                        <form method="post" action="logic/editBarang.php">
                            <label for="nama_barang">Nama barang</label>
                            <input class="form-input" type="text" maxlength="25" placeholder="nama barang" name="nama_barang" value="<?=$nama_barang?>" onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" required autofocus/>

                            <!-- <label for="status_barang">Status Barang</label>

                            <?php
                            $query = "SELECT * FROM status ORDER BY id_status";
                            ?>

                            <select class="form-select" name="id_status">

                            <?php
                            foreach($conn->query($query) as $status) {
                                if($status_barang == $status[0]) {
                                    echo "<option value='$status[0]' selected>$status[1]</option>";
                                } else {
                                    echo "<option value='$status[0]'>$status[1]</option>";
                                }
                            }
                            ?>

                            </select> -->

                            <input type="hidden" name="id_barang" value='<?php echo "$id_barang"?>'/>

                            <button type="submit">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="grid-4"></div>
        </div>

        <?php include 'include/footer.php' ?>
    </body>
</html>
