<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <title>Login</title>
  <!-- <link rel="stylesheet" href="app/dist/css/style.css"> -->
  <link rel="stylesheet" href="app/dist/css/login.css">

</head>

<body>

  <div class="box">
    <form action="conf/autentifikasi.php" method="post">
      <h2>WELCOME</h2>
      <div class="inputBox">
        <input type="text" class="form-control" required="required" name="username">
        <span>Username</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" class="form-control" required="required" name="password">
        <span>Password</span>
        <i></i>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>

</body>
<div id="particles-js"></div>
<script src="particles.js"></script>

<!-- scripts -->
<script src="../../../particles.js"></script>
<script src="app/dist/js/particleapp.js"></script>
<script>
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
</script> -->
<!-- kondisi if -else -->
<?php
if (isset($_GET['error'])) {
  $x = $_GET['error'];
  if ($x == 1) {
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'error',
      title: 'Login gagal, silahkan coba lagi.'
    })
    </script> ";
  } else if ($x == 2) {
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan masukan username dan password anda '
    })
    </script> ";
  } else {
    echo '';
  }
}
?>

</html>