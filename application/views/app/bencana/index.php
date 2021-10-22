<div class="container-fluid">
	<div class="row">
		<div class="col-12 my-3">
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Data Baru</button>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-4">Data Bencana</h3>
					<table class="table table-hovered">
						<thead>
							<th>#</th>
							<th>Nama Bencana</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach($bencana as $bencana): ?>
								<tr>
									<td><?= $nomor++ ?>.</td>
									<td><?= $bencana['nama'] ?></td>
									<td>
										<button class="badge badge-primary badge-sm w-100" type="button">detail</button>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Data Bencana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('bencana/index/tambah') ?>" method="post">
	      <div class="modal-body">
	      	<div class="row">

	      		<div class="col-12">
		      		<div class="card">
		      			<div class="card-body">

		      				<div class="form-group">
		      					<label>Nama Bencana</label>
		      					<input type="text" class="form-control" name="nama" required>
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