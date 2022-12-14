<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- header -->
    <?php
    
     session_start();
     include('header.php');
     ?>

    <!-- Preloader -->
    <!-- <?php include('preloader.php'); ?> -->
    <!-- navbar -->
    <?php include('../conf/config.php'); ?>
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 align="center">SRC POT RECONSTRUCTION</h1>
            </div><!-- /.col -->

            <!-- <div class="col-sm-12">
              <?php if (!isset($_SESSION["username"])) {
                echo '<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../login.php">INPUT</a></li>
                  </ol>';
              }
              ?>

            </div> -->
          
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      include('dashboard2.php');
      ?>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->


</body>

</html>