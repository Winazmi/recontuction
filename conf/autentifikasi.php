<?php
session_start();
include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, " SELECT * FROM tb_user WHERE username ='$username' AND password='$password' ");
if (mysqli_num_rows($query) == 1) {
    header('Location: ../app/index2.php');
    $user = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $user['username'];
    $_SESSION['devisi'] = $user['devisi'];
} else if ($username == '' || $password == '') {
    header('Location: ../login.php?error=2');
} else {
    header('Location: ../login.php?error=1');
}