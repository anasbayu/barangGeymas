<header>
   <ul>
      <li><a href="index.php">home</a></li>
      <?php
         if(isset($_SESSION['admin']))
         {
            echo "<li><a href='tambahForm.php'>tambah</a></li>";
         }
      ?>
      <li><a href="logic/logout.php">logout</a></li>
   </ul>
</header>
