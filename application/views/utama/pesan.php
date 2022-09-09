 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Appointment Date
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
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
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
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
                                  <p><?= $bo['status'] ?></p>
                                  <hr>
                                  <label>Desc</label>
                                  <p><?= $bo['desc'] ?></p>
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
                                  <h5 class="modal-title" id="exampleModalLabel">Appointment <?= $bad2['bad'] ?> Jam : <?= $data['jam'] ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <?= $data['jam'] ?>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
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