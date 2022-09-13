 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <?php 
          if ($date == '') {?>
            <h1>Appointment All
            </h1>
          <?php }else{ ?>
            <h1>Appointment Date <?= $date ?>
          </h1>
        <?php } ?>
      </div>
      <div class="col-sm-6">
        <!-- <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">DataTables</li>
        </ol> -->
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
           <form class="form-inline" method="post" action="">
            <div class="form-group mb-2">

            </div>
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Date</label>
              <input type="date" class="form-control" name="date">
            </div>
            <button type="submit" class="btn btn-danger mb-2">Search</button>
          </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Jam</th>
                <?php foreach ($bad as $data) { ?>
                  <th><?= $data['bad'] ?></th>
                <?php } ?>

              </tr>
            </thead>
            <tbody>
             <?php foreach ($jam as $data) {

               ?>
               <tr>
                 <td><?= $data['jam'] ?></td>
                 <?php foreach ($bad as $bad2) { ?>
                  <td>
                    <?php 

                    if ($date != '') {
                      $this->db->where('date', $date);
                    }

                    $this->db->where('time', $data['jam']);
                    $this->db->where('bad', $bad2['bad']);
                    $bo =  $this->db->get('tbl_pesan_customer')->row_array();
                    if ($bo == true) { ?>

                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?= $bo['id'] ?>">
                        <?= $bo['customer'] ?>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?= $bo['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Customer <?= $bo['customer'] ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <label>No Hp</label>
                              <p><?= $bo['nohp'] ?></p>
                              <hr>
                              <label>Terapis</label>
                              <p><?= $bo['terapis_pilihan'] ?></p>
                              <hr>
                              <label>Status</label>
                              <p>
                                <form class="form-inline" method="post" action="<?= base_url('utama/update_status') ?>">
                                  <input type="hidden" name="id" value="<?= $bo['id'] ?>">
                                  <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <select class="form-control" name="status">
                                      <option><?= $bo['status'] ?></option>
                                      <?php foreach ($status as $data4) { ?>
                                        <option><?= $data4['status'] ?></option>
                                      <?php } ?>

                                    </select>
                                  </div>
                                  <button type="submit" class="btn btn-primary mb-2">Ubah Status</button>
                                </form>


                              </p>
                              <hr>
                              <label>Desc</label>
                              <p><?= $bo['desc'] ?></p>
                              <hr>

                              <label>Date</label>
                              <p><?= $bo['date'] ?></p>
                              <hr>

                            </div>

                          </div>
                        </div>
                      </div>


                      <?php 
                    }else{ ?>

                      <a href="#" data-toggle="modal" data-target="#exampleModalpesan<?= $bad2['id'] ?>">
                        <small>Appointment</small>
                      </a>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalpesan<?= $bad2['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Appointment <?= $bad2['bad'] ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?= base_url('utama/tambah_pesan_customer') ?>">
                                <div class="form-group">
                                  <label>Customer</label>
                                  <input type="text" name="customer" class="form-control" placeholder="Customer">
                                </div>

                                <div class="form-group">
                                  <label>No hp</label>
                                  <input type="number" name="nohp" class="form-control" placeholder="Nomor telp">
                                </div>
                                <div class="form-group">
                                  <label>Bad</label>
                                  <input type="text" name="bad" class="form-control" value="<?= $bad2['bad'] ?>" readonly>
                                </div>


                                <div class="form-group">
                                  <label>Time</label>
                                  <select class="form-control" name="time" id="time">
                                    <option value="">-- Pilih Time --</option>
                                    <?php foreach($jam as $dataa){ ?>
                                      <option><?= $dataa['jam'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Date</label>
                                  <input type="date" name="date" class="form-control" id="date">
                                </div>

                                <div class="form-group">
                                  <label>Terapis</label>
                                  <select class="form-control" name="trapis">
                                    <option>-- Pilih Terapis --</option>
                                    <?php foreach ($terapis as $dataa){ ?>
                                      <option><?= $dataa['terapis'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Status</label>
                                  <select class="form-control" name="status">
                                    <option>-- Pilih status --</option>
                                    <option>Book</option>
                                    <option>Consult</option>
                                    <option>Treatment</option>
                                    <option>Finished</option>
                                    <option>Cancel</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Outlet</label>
                                  <select class="form-control" name="outlet">
                                    <option>-- Pilih outlet --</option>
                                    <?php foreach ($outlet as $dataa){ ?>
                                      <option><?= $dataa['outlet'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Desc</label>
                                  <textarea class="form-control" name="desc"></textarea>
                                </div>



                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Appointment</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php 
                    }
                    ?>
                  </td>
                <?php } ?>
              </tr>

            <?php } ?>


          </tbody>
          <tfoot>
            <tr>
             <th>Jam</th>
             <?php foreach ($bad as $data) { ?>
              <th><?= $data['bad'] ?></th>
            <?php } ?>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
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