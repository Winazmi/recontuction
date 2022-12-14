<!-- <?php
// $query = mysqli_query($koneksi, " SELECT * FROM data_pot");
// $view = mysqli_fetch_array($query);
?>

<section class="conten">
  <div class="container-fluid">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">MASUKKAN DATA</h3>
      </div>
      <!/.card-header -->
      <!-- <div class="card-body">
        <form method="get" action="add/tambah_data.php">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>TGL</th>
                <th><img src="add/../../dist/img/a.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/b.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/c.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/d.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/e.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/f.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/g.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/h.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/i.png" alt="srcl" height="30" width="30"></th>
                <th><img src="add/../../dist/img/j.png" alt="srcl" height="30" width="30"></th>
                <th>KET.</th>
              </tr>
            </thead>
            </tfoot>
            <tbody>
              <tr>
                <?php
                // $query = mysqli_query($koneksi, " SELECT * FROM data_pot");
                date_default_timezone_set('Asia/Jakarta');
                $dari = date('Y-m-d',strtotime('first day of this month'));
                $sampai = date('Y-m-d',strtotime('last day of this month'));
                $tanggal = date('Y-m-d',strtotime('first day of this month'));
                //for ($tgl = $dari; $tgl <= $sampai; $tgl++) {
                ?>
                  <th><input type="date" name="tanggal" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="cut_out" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="take_out" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="CBD" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="CSE" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="work_b" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="IOS" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="work_12" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="ACDD" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="baking" placeholder="" style="width:115px"></th>
                  <th><input type="text" name="start_up" placeholder="" style="width:115px"></th> 
                  <th><input type="text" name="keterangan" placeholder="....." style="width:115px"></th>
              </tr>
            

            </tbody>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-success"> Simpan </button>
            </div>
          </table>
        </form>
       /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</section> -->