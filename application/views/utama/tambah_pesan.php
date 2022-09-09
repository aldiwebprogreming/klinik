 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pesan customer
          </h1>
       <!--  </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div> -->
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
            <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Tambah Bad Appointment
             </button> -->


             <div class="card-body">
              <form method="post" action="<?= base_url('utama/tambah_pesan_customer') ?>">
                <div class="row">
                  <div class="col-sm-6">
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
                      <select class="form-control" name="bad" id="bad">
                        <option value="">-- Pilih Bad --</option>
                        <?php foreach($bad as $data){ ?>
                          <option><?= $data['bad'] ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Time</label>
                      <select class="form-control" name="time" id="time">
                        <option value="">-- Pilih Time --</option>
                        <?php foreach($jam as $data){ ?>
                          <option><?= $data['jam'] ?></option>
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
                        <?php foreach ($terapis as $data){ ?>
                          <option><?= $data['terapis'] ?></option>
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
                        <?php foreach ($outlet as $data){ ?>
                          <option><?= $data['outlet'] ?></option>
                        <?php } ?>
                      </select>
                    </div>



                    <div class="form-group">
                      <label>Desc</label>
                      <textarea class="form-control" name="desc"></textarea>
                    </div>

                    <button class="btn btn-primary">Tamah Pesan</button>

                    <div class="" id="alert"></div>

                  </div>
                </div>

              </form>
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
<!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $("#date").change(function(){
      var date = $(this).val();
      var time = $("#time").val();
      var bad = $("#bad").val();
      var url = "<?= base_url('utama/cek_bo?bad=') ?>"+bad+"&time="+time+"&date="+date;
      $("#alert").load(url);
    })
  })
</script> -->