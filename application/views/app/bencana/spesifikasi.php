<div class="container-fluid">
	<div class="row">
		<div class="col-12 my-2">
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Tambah Bencana</button>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-3">Bencana Terjadi</h3>
					<table class="table table-hovered">
						<thead>
							<th>#</th>
							<th>Lokasi Bencana</th>
							<th>Jenis Bencana</th>
							<th>Radius</th>
							<th>Level</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php if($bencana): ?>
								<?php foreach($bencana as $bencana): ?>
									<tr>
										<td><?= $nomor++ ?>.</td>
										<td><?= $bencana['lokasi'] ?></td>
										<td><?= $bencana['jenis'] ?></td>
										<td><?= $bencana['radius'] ?></td>
										<td><?= $bencana['level'] ?></td>
										<td>
											<button type="button" class="badge badge-primary badge-sm">Detail</button>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="6" class="text-center">Belum ada data bencana.</td>
								</tr>
							<?php endif; ?>
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
        <h5 class="modal-title" id="tambahModalLabel">Bencana Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('bencana/spesifikasi/tambah') ?>" method="post">
	      <div class="modal-body">
	        <div class="form-group">
	        	<label>Jenis Bencana</label>
	        	<select class="form-control" name="id_bencana">
	        		<?php foreach($jenis_bencana as $jenis_bencana): ?>
		        		<option value="<?= $jenis_bencana['id'] ?>"><?= $jenis_bencana['nama'] ?></option>
		        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Lokasi Bencana</label>
	        	<select class="form-control" name="id_lokasi">
	        		<?php foreach($provinces as $provinces): ?>
		        		<option value="<?= $provinces['id'] ?>"><?= $provinces['name'] ?></option>
		        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Radius Skala</label>
	        	<select class="form-control" name="radius">
	        		<option value="&lt; 10">&lt; 10 KM</option>
	        		<option value="&le; 50">&le; 50 KM</option>
	        		<option value="&le; 100">&le; 100 KM</option>
	        		<option value="&gt; 100">&gt; 100 KM</option>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Level Bahaya</label>
	        	<select class="form-control" name="level">
	        		<?php foreach($level_bencana as $level): ?>
	        			<option value="<?= $level['id'] ?>"><?= $level['nama'] ?></option>
		        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <hr>
	        <div class="row">
	        	<div class="col-4">
			        <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" name="berenang" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							    Bisa Berenang
							  </label>
							</div>
	        	</div>
	        	<div class="col-4">
	        		<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" name="mendaki" id="defaultCheck2">
							  <label class="form-check-label" for="defaultCheck2">
							    Bisa Mendaki
							  </label>
							</div>
	        	</div>
	        	<div class="col-4"> 
	        		<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" name="menyelam" id="defaultCheck3">
							  <label class="form-check-label" for="defaultCheck3">
							    Bisa Menyelam
							  </label>
							</div>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
      </form>
    </div>
  </div>
</div>