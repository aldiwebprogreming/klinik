 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Jam 
          </h1>
        </div>
        <div class="col-sm-6">
         <!--  <ol class="breadcrumb float-sm-right">
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
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Tambah Jam Appointment
             </button>

             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jam Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?= base_url('utama/add_jam') ?>">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tambah Jam</label>
                        <input type="time" class="form-control" name="jam">

                      </div>

                    </div>
                    <div class="modal-footer">

                      <input type="submit" name="kirim" class="btn btn-primary" value="Tambah Jam">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jam</th>
                  <th>Date Crate</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach($jam as $data){ ?>
                  <tr>
                   <td><?= $no++ ?></td>
                   <td><?= $data['jam'] ?></td>
                   <td><?= $data['date_create'] ?></td>
                   <td>
                    <a href="<?= base_url('utama/hapus_jam?id=') ?><?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>


            </tbody>
            <tfoot>
              <tr>
               <th>No</th>
               <th>Jam</th>
               <th>Date Crate</th>
               <th>Opsi</th>
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