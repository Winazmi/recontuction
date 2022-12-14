<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['devisi']);
header('Location: ../app/index2.php');
// login.php