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
                  <?php 
                  $jama = "01:00";
                  ?>
                  <?php foreach ($jam as $data) { ?>
                    <tr>
                      <td><?= $data['jam'] ?></td>
                      <td><?php if ($data['jam'] == $jama) {
                        echo "pesan";
                      } ?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
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