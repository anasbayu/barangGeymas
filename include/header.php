<header>
   <ul>
      <li><a href="">profil</a></li>
      <li><a href="logic/logout.php">logout</a></li>
      <?php
         if(isset($_SESSION['admin']))
         {
            echo "<li><a href='tambahForm.php'>tambah</a></li>";
         }
      ?>
   </ul>
</header>
