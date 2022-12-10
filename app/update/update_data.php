<?php
    include('../../conf/config.php');
    $no_input = $_GET['no_input'];
    $tanggal = $_GET['tanggal'];
    $cut_up = $_GET['cut_up'];
    $take_out = $_GET['take_out'];
    $CBD = $_GET['CBD'];
    $CSE = $_GET['CSE'];
    $work_b = $_GET['work_b'];
    $IOS = $_GET['IOS'];
    $work_12 = $_GET['work_12'];
    $ACDD = $_GET['ACDD'];
    $baking = $_GET['baking'];
    $start_up = $_GET['start_up'];
    $keterangan = $_GET['keterangan'];
    $query = mysqli_query($koneksi, "UPDATE data_pot SET tanggal='$tanggal' , cut_up='$cut_up',take_out= '$take_out', CBD='$CBD',CSE='$CSE',work_b='$work_b',
            work_b='$work_b', IOS='$IOS',work_12='$work_12',work_b='$work_b',ACDD='$ACDD',baking='$baking',start_up='$start_up',keterangan='$keterangan' WHERE no_input='$no_input'");
    header('Location: ../index.php?page=data_pot')
 ?>

