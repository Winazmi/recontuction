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
    <?php include('navbar.php'); ?>
    <!-- navbar -->
    <?php include('../conf/config.php'); ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>


      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">SRC POT REDUCTION</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == 'dashboard') {
                    include('dashboard.php');
                } else if ($_GET['page'] == 'data_pot') {
                    include('data_pot.php');
                } else if ($_GET['page'] == 'view_data') {
                    include('view/view_data.php');
                } else if ($_GET['page'] == 'edit-data') {
                    include('edit/edit_data.php');
                } else {
                    include('not_found.php');
                }
            } else {
                include('dashboard.php');
            }
            ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


</body>

</html>