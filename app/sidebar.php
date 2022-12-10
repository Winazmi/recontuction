<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/engineer.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">


        <?php if (isset($_SESSION['username']) && isset($_SESSION['devisi'])) { ?>
        <?php echo $_SESSION['username'] . ' | ' . $_SESSION['devisi']; ?>
        <?php } else { ?>
        <p>Guest</p>
        <?php }  ?>
      </a>

    </div>
  </div>
  <?php
    // include('menu/user.php');

    if (isset($_SESSION['username']) && isset($_SESSION['devisi']) == 'admin') {
        include('menu/menu.php');
    } else {
        include('menu/user.php');
    }


    ?>
  <!-- Sidebar Menu -->
</div>