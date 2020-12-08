<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Member</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        	<div class="col-12">
        		<div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserModal">
                	<i class="fas fa-fw fa-plus"></i> | User Baru
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
	                  <tr>
	                    <th>ID User</th>
	                    <th>Nama</th>
	                    <th>Username</th>
	                    <th>Hak Akses</th>
	                    <th>Status</th>
	                    <th>Aksi</th>
	                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($users as $user): ?>
	                  	<tr>
	                  		<td class="text-center">U_<?= $user['ID'] ?></td>
	                  		<td class="text-center"><?= $user['nama'] ?></td>
	                  		<td class="text-center"><?= $user['username'] ?></td>
	                  		<td class="text-center"><?= $user['hak_akses'] ?></td>
	                  		<td class="text-center"><?= ($user['aktif'] == 1) ? 'Aktif' : 'Non Aktif' ?></td>
	                  		<td class="text-center">
	                  			<a href="<?= base_url('App/users/aktivasi/') . $user['ID'] ?>" class="<?= ($user['aktif']) ? 'text-success' : 'text-danger' ?>">
	                  				<i class="fas fa-fw fa-power-off"></i>
	                  			</a>
	                  		</td>
	                  	</tr>
	                  <?php endforeach; ?>
                  </tbody>
                  <tfoot class="text-center">
	                  <tr>
	                    <th>ID User</th>
	                    <th>Nama</th>
	                    <th>Username</th>
	                    <th>Hak Akses</th>
	                    <th>Status</th>
	                    <th>Aksi</th>
	                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        	</div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Akun Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('App/users/add') ?>" method="post">
	      <div class="modal-body">
	        <div class="form-group">
	        	<label for="nama">Nama User</label>
	        	<input type="text" name="nama" class="form-control" id="nama" required>
	        </div>
	        <div class="form-group">
	        	<label for="username">Username</label>
	        	<input type="text" name="username" class="form-control" id="username" required>
	        </div>
	        <div class="form-group">
	        	<label for="password">Password</label>
	        	<input type="password" name="password" class="form-control" id="password" required>
	        </div>
	        <div class="form-group">
	        	<label for="hak_akses">Hak Akses</label>
	        	<select class="form-control" name="hak_akses" id="hak_akses">
	        		<option value="User">User</option>
	        		<option value="Admin">Admin</option>
	        	</select>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary">Daftar</button>
	      </div>
      </form>
    </div>
  </div>
</div>