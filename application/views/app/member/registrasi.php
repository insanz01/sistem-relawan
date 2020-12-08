<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registrasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Member</a></li>
              <li class="breadcrumb-item active">Register</li>
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
          <div class="col-12">
          	<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Member Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('app/register_member') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" readonly class="form-control" id="id" value="M-<?= $ID ?>">
                  </div>
                  <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" class="form-control" id="NIK" name="NIK" placeholder="Nomor Induk Kependudukan" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Member</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" required>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                    <div class="row">
                    	<div class="col-6">
                    		<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Jakarta" required>
                    	</div>
                    	<div class="col-6">
                    		<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    	</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                    	<option>Pilih</option>
                    	<option value="laki-laki">Laki-Laki</option>
                    	<option value="wanita">Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <select class="form-control" name="golongan_darah" id="golongan_darah" required>
                    	<option value="">Pilih</option>
                    	<option value="A">A</option>
                    	<option value="B">B</option>
                    	<option value="AB">AB</option>
                    	<option value="O">O</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select class="form-control" name="agama" id="agama" required>
                    	<option value="">Pilih</option>
                    	<option value="Islam">Islam</option>
                    	<option value="Katolik">Katolik</option>
                    	<option value="Protestan">Protestan</option>
                    	<option value="Hindu">Hindu</option>
                    	<option value="Buddha">Buddha</option>
                    	<option value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Nama Pekerjaan" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email (Optional)">
                  </div>
                  <div class="form-group">
                    <label for="no_telp">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="No Telepon (WhatsApp jika ada)">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Daftar Anggota Baru</button>
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