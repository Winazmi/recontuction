<?php
$no_input = $_GET['no_input'];
$query = mysqli_query($koneksi, "SELECT* FROM data_pot WHERE no_input='$no_input' ");
$view = mysqli_fetch_array($query);
?>

<section class="conten">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">EDIT DATA</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='get' action='update/update_data.php'>
                    <div class="row">
                        <div class="col-sm-2">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="inputtanggal"><img src="dist/img/calendar.png" alt="srcl" height="30" width="30"></label>
                                <input type="date" class="form-control" placeholder="Date" name='tanggal' value="<?php echo $view['tanggal'] ?>">
                                <input type="text" class="form-control" placeholder="no.input" name='no_input' value="<?php echo $view['no_input'] ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/a.png" alt="srcl" height="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='cut_up' value="<?php echo $view['cut_up'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/b.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='take_out' value="<?php echo $view['take_out'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/c.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='CBD' value="<?php echo $view['CBD'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/d.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='CSE' value="<?php echo $view['CSE'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/e.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='work_b' value="<?php echo $view['work_b'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/f.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='IOS' value="<?php echo $view['IOS'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/g.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='work_12' value="<?php echo $view['work_12'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/h.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='ACDD' value="<?php echo $view['ACDD'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/i.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='baking' value="<?php echo $view['baking'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="input"><img src="dist/img/j.png" alt="srcl" eight="30" width="30"></label>
                                <input type="text" class="form-control" placeholder="No.pot" name='start_up' value="<?php echo $view['start_up'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" rows="3" placeholder="Keterangan hari ini ..." name='keterangan' value="<?php echo $view['keterangan'] ?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>