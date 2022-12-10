<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card col-md-12 mx-auto mt-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <form method="POST" action="" class="form-inline">
                  <label for="date2">Tampilkan transaksi bulan </label>
                  <div class="col-sm-6">
                  <select class="form-control mr-2" name="bulan">
                    <option value="">-</option>
                    <?php

                    $b = mysqli_query($koneksi, "SELECT DISTINCT date_format(tanggal, '%M %Y') as month_year FROM data_pot");
                    while ($data = $b->fetch_array()) {
                      echo "<option>$data[0]</option>";
                    }
                    ?>
                  </select>
                  <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
       
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</section>