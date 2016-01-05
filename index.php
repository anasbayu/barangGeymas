<!DOCTYPE html>
<?php
    include "include/koneksi.php";
    include "include/auth.php";
    // include "include/header.php";
?>
<html>
    <head>
        <title>Beranda</title>
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
                                ;
                        }
                    ?>

                    <li class="keluar"><a href="logic/logout.php">Keluar</a></li>
                </div>
            </div>
        </div>

        <div class="grid-container main-content">
            <div class="grid-12">
                <div class="">
                    <div class="welcome-message">
                        Selamat datang <?=$_SESSION['username']?>
                    </div>

                    <table class="tabel-barang">
                    <tr>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Status</th>
                        <th>Oleh</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        $query = "SELECT barang.id_barang, barang.nama_barang, status.nama_status, barang.id_status FROM barang JOIN status ON (barang.id_status = status.id_status) ORDER BY barang.id_barang";

                        foreach($conn->query($query) as $barang) {
                            echo "
                            <tr>
                                <td>$barang[0]</td>
                                <td>$barang[1]</td>
                                <td>$barang[2]</td>
                            ";

                            if ($barang[3] == 2) {
                                $queryUserString = "SELECT users.nama_user
                                                  FROM transaksi
                                                  JOIN users ON users.id_user = transaksi.id_user
                                                  WHERE transaksi.id_barang = '$barang[0]'";
                                foreach ($conn->query($queryUserString) as $user) {
                                    echo "<td>" . $user['nama_user'] . "</td>";
                                }
                            } else {
                                echo "<td>-</td>";
                            }

                            if(!isset($_SESSION['admin'])) {
                                if($barang[3] == 1) {
                                   echo "<td><a href='logic/pinjam.php?id_barang=$barang[0]&id_user=$_SESSION[id_user]'>Pinjam</a></td>";
                                } else {
                                    echo "<td>-</td>";
                                }
                            } else {
                                echo "
                                    <td>
                                       <a href='editForm.php?nama_barang=$barang[1]&status_barang=$barang[3]&id_barang=$barang[0]'>
                                       Ubah</a> |
                                       <a href='logic/hapus.php?id_barang=$barang[0]'>Hapus</a>
                                ";

                                if($barang[3] == 3) {
                                   echo " | <a href='logic/setujui.php?id_barang=$barang[0]&id_status=2'>Setujui</a>
                                   | <a href='logic/setujui.php?id_barang=$barang[0]&id_status=1'>Tolak</a>";
                                }

                                echo "</td>";
                            }

                         echo "</tr>";
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php' ?>
   </body>
</html>
