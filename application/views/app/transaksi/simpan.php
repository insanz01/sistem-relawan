<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Simpan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
              <li class="breadcrumb-item active">Simpan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Simpan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="member">Member</label>
                    <select class="form-control" name="member" id="member">
                      <option></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah Simpanan</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Simpanan">
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis Simpanan</label>
                    <select class="form-control" name="jenis_simpanan" id="jenis">
                      <option value="simpanan pokok">Simpanan Pokok</option>
                      <option value="siimpanan wajib">Simpanan Wajib</option>
                      <option value="simpanan sukarela">Simpanan Sukarela</option>
                      <option value="dana cadangan">Dana Cadangan</option>
                      <option value="modal pinjaman">Modal Pinjamman</option>
                      <option value="hibah atau donasi">Hibah atau Donasi</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->