<div class="container-fluid">
	<div class="row">
		<div class="col-12 my-3">
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Tambah Akun</button>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Akun Relawan</h3>
					<table class="table table-hovered">
						<thead>
							<th>#</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Lokasi</th>
							<th>Nomor HP</th>
							<th>Email</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach($users as $user): ?>
								<tr>
									<td><?= $nomor++ ?>.</td>
									<td><?= $user['nama_lengkap'] ?></td>
									<td><?= $user['username'] ?></td>
									<td><?= $user['lokasi'] ?></td>
									<td><?= $user['no_hp'] ?></td>
									<td><?= $user['email'] ?></td>
									<td>
										<button class="badge badge-primary badge-sm" type="button">detail</button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 80% !important">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Relawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('users/relawan/tambah') ?>" method="post">
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-6">
		      		<div class="card">
		      			<div class="card-body">

					      	<div class="row">
					      		<div class="col-6">
							        <div class="form-group">
							        	<label>Username</label>
							        	<input type="text" class="form-control" name="username" placeholder="Ketik Username" required>
							        </div>
					      		</div>
					      		<div class="col-6">
					      			<div class="form-group">
							        	<label>Password</label>
							        	<input type="password" class="form-control" name="password" placeholder="Ketik Password" required>
							        </div>
					      		</div>
					      	</div>

					      	<div class="form-group">
					      		<label>Nama Lengkap</label>
					      		<input type="text" class="form-control" name="nama_lengkap" placeholder="Ketik Nama Lengkap" required>
					      	</div>

					      	<div class="row">
					      		<div class="col-6">
							      	<div class="form-group">
							      		<label>Nomor HP (WhatsApp)</label>
							      		<input type="text" class="form-control" name="no_hp" placeholder="Gunakan Nomor WhatsApp" required>
							      	</div>
					      		</div>
					      		<div class="col-6">
					      			<div class="form-group">
							      		<label>Email</label>
							      		<input type="email" class="form-control" name="email" placeholder="contoh@mail.com" required>
							      	</div>
					      		</div>
					      	</div>

					      	<div class="form-group">
					      		<label>Lokasi (Tempat Tinggal)</label>
					      		<select class="form-control" name="lokasi" required>
					      			<?php foreach($provinsi as $provinsi): ?>
						      			<option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
						      		<?php endforeach; ?>
					      		</select>
					      	</div>

			      		</div>

	      			</div>
	      		</div>
	      		
	      		<div class="col-6">

	      			<div class="card">
	      				<div class="card-body">

			      			<div class="form-group">
			      				<label>Berenang</label>
			      				<select class="form-control" name="berenang" required>
			      					<option value="">- Pilih -</option>
			      					<option value="1">Tidak Bisa</option>
			      					<option value="3">Bisa</option>
			      					<option value="5">Ahli</option>
			      				</select>
			      			</div>

			      			<div class="form-group">
			      				<label>Mendaki</label>
			      				<select class="form-control" name="mendaki" required>
			      					<option value="">- Pilih -</option>
			      					<option value="1">Tidak Bisa</option>
			      					<option value="3">Bisa</option>
			      					<option value="5">Ahli</option>
			      				</select>
			      			</div>

			      			<div class="form-group">
			      				<label>Menyelam</label>
			      				<select class="form-control" name="menyelam" required>
			      					<option value="">- Pilih -</option>
			      					<option value="1">Tidak Bisa</option>
			      					<option value="3">Bisa</option>
			      					<option value="5">Ahli</option>
			      				</select>
			      			</div>

	      				</div>
	      			</div>

	      		</div>

	      	</div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
  </div>
</div>