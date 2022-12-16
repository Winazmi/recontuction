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
                        <td>
                          <a onclick="delete_data(<?php echo $pot['no_input']; ?>)" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a>
                          <a href="index2.php?page=edit-data&& no_input=<?php echo $pot['no_input']; ?>" class="btn btn-sm btn-success"> <i class="fas fa-pencil-alt"></i>
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
      <div class="modal-dialog modal-xl" style="max-width:99%!important">
        <div class="modal-content" style="max-width:99%!important; background:white;">

          <div class="modal-header">
            <h4 class="modal-title" align="center">Tambah Pot Recontruktion</h4>
            <div class="col-md-8">
            </div>
            <!-- button utk menambahkan bulan atau mengurangi -->
            <div class="btn btn-primary mr-2" id="button-add"><</div>
            <div class="btn btn-primary mr-2" id="button-min">></div>
          </div>
          <!-- add data 1 -->
          <form method="post" action="add/tambah_data.php">

            <?php
            date_default_timezone_set('Asia/Jakarta');
            // $n untuk uji coba menambahkan dan mengurangi bulan jika + maka akan ke bulan selanjutnya,jika - akan bulan sebelumnya
            $n = +1;
            $dari = date('Y-m-d', strtotime("$n month", strtotime('first day of this month')));
            $sampai = date('Y-m-t', strtotime($dari));
            ?>

            <table>
              <tr>
                <th><label for="inputtanggal"><img src="dist/img/calendar.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/a.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/b.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/c.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/d.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/e.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/f.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/g.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/h.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/i.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input"><img src="dist/img/j.png" alt="srcl" height="30" width="30"></label></th>
                <th><label for="input">Keterangan</label></th>
              </tr>
              <?php
              for ($tgl = $dari; $tgl <= $sampai; $tgl++) {
              ?>
                <tr>
                  <td><input type="date" class="form-control" id="inputtgl" value=<?php echo $tgl; ?> placeholder="date" name="tanggal[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="cut_up[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="take_out[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="CBD[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="CSE[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="work_b[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="IOS[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="work_12[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="ACDD[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="baking[]"></td>
                  <td><input type="text" class="form-control" id="input" value=" " placeholder="no.pot" name="start_up[]"></td>
                  <td><textarea type="text" class="form-control" rows="1" height="30" id="input" placeholder="....." name="keterangan[]"></textarea></td>
                </tr>
              <?php
              }
              ?>
            </table>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-success"> Simpan </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- /.modal-content -->
    </div>
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
      integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script> -->

    <script type="text/javascript">
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

      // $(document).ready(function() {
      //   $('#button-add').on('click', function() {
      //     $('.ajax').append(`<div class="child form-row  mt-2 p-2"> <div class="col-md-1 flex ">
      //             <input type="date" class="form-control" id="inputtgl" placeholder="date" name="tanggal[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="cut_up[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="take_out[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="CBD[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="CSE[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="work_b[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="IOS[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="work_12[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="ACDD[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="baking[]">
      //           </div>
      //           <div class="col-md-1">
      //             <input type="text" class="form-control" id="input" value="-" placeholder="no.pot" name="start_up[]">
      //           </div>
      //           <div class="col-md-1 mb-1 d-flex justify-content-between">
      //             <textarea type="text" rows="1" class="form-control mr-1 " id="input" placeholder="....." name="keterangan[]"></textarea>
      //             <div class="btn btn-sm btn-danger " id="delete-child"><span class="fas fa-trash-alt"></span></div>
      //           </div>


      //         </div>`)
      //   });
      //   $(document).on('click', '#delete-child', function() {
      //     $(this).parents('.child').remove()
      //   })
      // })
    </script>