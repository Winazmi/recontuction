    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Skejul Pot Reduction</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th><img src="dist/img/a.png" alt="srcl" height="30" width="30"></th>
                      <th><img src="dist/img/b.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/c.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/d.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/e.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/f.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/g.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/h.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/i.png" alt="srcl" eight="30" width="30"></th>
                      <th><img src="dist/img/j.png" alt="srcl" eight="30" width="30"></th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi, " SELECT * FROM data_pot");
                    while ($pot = mysqli_fetch_array($query)) {
                    ?>
                      <tr>
                        <td><?php echo $pot['tanggal']; ?></td>
                        <td><?php echo $pot['cut_up']; ?></td>
                        <td><?php echo $pot['take_out']; ?></td>
                        <td><?php echo $pot['CBD']; ?></td>
                        <td><?php echo $pot['CSE']; ?></td>
                        <td><?php echo $pot['work_b']; ?></td>
                        <td><?php echo $pot['IOS']; ?></td>
                        <td><?php echo $pot['work_12']; ?></td>
                        <td><?php echo $pot['ACDD']; ?></td>
                        <td><?php echo $pot['baking']; ?></td>
                        <td><?php echo $pot['start_up']; ?></td>
                        <td><?php echo $pot['keterangan']; ?></td>
                      </tr>
                    <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- </div> -->


 