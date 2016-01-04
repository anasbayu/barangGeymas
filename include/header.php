<header>
    <ul>
        <li><a href="index.php">beranda</a></li>

        <?php
            if(isset($_SESSION['admin'])) {
                echo "<li><a href='tambahForm.php'>tambah barang</a></li>"
                    // . "<li><a href='list.php'>Daftar peminjam</a></li>"
                    ;
            }
        ?>

        <li><a href="logic/logout.php">logout</a></li>
    </ul>
</header>
