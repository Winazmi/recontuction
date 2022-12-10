<?php
include('../../conf/config.php');
$no_input = $_GET['no_input'];

$query = mysqli_query($koneksi, "DELETE FROM data_pot WHERE no_input='$no_input'");
header('Location: ../index2.php?page=data_pot');