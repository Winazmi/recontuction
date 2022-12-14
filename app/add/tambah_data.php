<?php


include('../../conf/config.php');
// echo '<pre>';
// var_dump($_POST['tanggal']);
// echo '</pre>';
for ($i = 0; $i < count($_POST['tanggal']); $i++) {
    $tanggal = $_POST['tanggal'][$i];
    $cut_up = $_POST['cut_up'][$i];
    $take_out = $_POST['take_out'][$i];
    $CBD = $_POST['CBD'][$i];
    $CSE = $_POST['CSE'][$i];
    $work_b = $_POST['work_b'][$i];
    $IOS = $_POST['IOS'][$i];
    $work_12 = $_POST['work_12'][$i];
    $ACDD = $_POST['ACDD'][$i];
    $baking = $_POST['baking'][$i];
    $start_up = $_POST['start_up'][$i];
    $keterangan = $_POST['keterangan'][$i];
    $query = mysqli_query($koneksi, "INSERT INTO data_pot(tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan)
    VALUES ('$tanggal','$cut_up','$take_out','$CBD','$CSE','$work_b','$IOS','$work_12','$ACDD','$baking','$start_up','$keterangan')");
}
header('Location: ../index2.php?page=data_pot');