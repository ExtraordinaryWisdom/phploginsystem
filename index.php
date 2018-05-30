<?php
include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Home</h2>
    <?php
      if (isset($_SESSION['u_first'])) {
      echo "<h2>Welcome " . $_SESSION['u_first'] . "</h2>";
      }
    ?>
  </div>
</section


<?php
include_once 'footer.php';
?>
