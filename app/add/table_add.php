    <!-- Main content -->


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
                  Add Date
                </button>
                </br>
                </br>
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
                      <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi, " SELECT * FROM data_pot order by tanggal Desc");
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
                        <td>
                          <a onclick="delete_data(<?php echo $pot['no_input']; ?>)" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a>
                          <a href="index.php?page=edit-data&& no_input=<?php echo $pot['no_input']; ?>" class="btn btn-sm btn-success"> <i class="fas fa-pencil-alt"></i>
                          </a>
                        </td>
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

    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Tambah Pot Reductiaon</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- table -->
          <div class="card-body"></div>
          <form method="get" action="tambah_data.php">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>TGL</th>
                  <th><img src="../../dist/img/a.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/b.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/c.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/d.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/e.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/f.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/g.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/h.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/i.png" alt="srcl" height="30" width="30"></th>
                  <th><img src="../../dist/img/j.png" alt="srcl" height="30" width="30"></th>
                  <th>KET.</th>
                </tr>
              </thead>
              </tfoot>
              <tbody>
                <tr>
                  <?php
                  $query = mysqli_query($koneksi, " SELECT * FROM data_pot");
                  $no = 0;
                  for ($no = 1; $no < 32; $no++) {
                  ?>
                    <th><?php echo $no; ?></th>
                    <th><input type="text" name="cut_up[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="take_out[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="CBD[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="CSE[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="work_b[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="IOS[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="work_12[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="ACDD[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="baking[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="start_up[]" placeholder="" style="width:115px"></th>
                    <th><input type="text" name="keterangan[]" placeholder="....." style="width:115px"></th>
                </tr>
              <?php } ?>

              </tbody>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-success"> Simpan </button>
              </div>
            </table>
          </form>
        </div>

      </div>
    </div>

    <!-- /.modal-content -->
    </div>
    </div>
    <!-- /.modal-dialog -->
    </div>
    <script>
      function delete_data(data_no_input) {
        // alert('ok');
        // window.location=("delete/delete_data.php?no_input="+data_no_input )
        Swal.fire({
          title: 'Apakah anda ingin menghapus data ini?',
          // showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Hapus data',
          confirmButtonColor: '#800000'
          // denyButtonText: `Don't save`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location = ("delete/delete_data.php?no_input=" + data_no_input)
          }
        })
      };
    </script>