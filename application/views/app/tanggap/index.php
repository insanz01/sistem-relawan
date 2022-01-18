<div class="container-fluid">
	<div class="row">
		<div class="col-12 my-2">
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Terjunkan Relawan</button>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-3">Tanggap Darurat (Penugasan)</h3>		
					<table class="table table-hovered">
						<thead>
							<th>#</th>
							<th>Nama</th>
							<th>Asal</th>
							<th>Lokasi Bencana</th>
							<th>Jenis Bencana</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach($tugas_relawan as $tugas): ?>
								<tr>
									<td><?= $nomor++ ?>.</td>
									<td><?= $tugas['nama_lengkap'] ?></td>
									<td><?= $tugas['asal'] ?></td>
									<td><?= $tugas['lokasi'] ?></td>
									<td><?= $tugas['bencana'] ?></td>
									<td>
										<button type="button" class="badge badge-primary badge-sm w-100">Detail</button>
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
        <h5 class="modal-title" id="tambahModalLabel">Terjunkan Relawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('bencana/tanggap/tambah') ?>" method="post">
	      <div class="modal-body">
	        <!-- <div class="form-group"> -->
	        	<!-- <p>Nanti akan ada rekomendasi sesuai profil relawan</p> -->
	        <!-- </div> -->
        	<div class="form-group">
        		<label>Lokasi Bencana</label>
        		<select class="form-control" name="id_bencana" onchange="showBencana(this)">
        			<option value="">- PILIH -</option>
        			<?php foreach($bencana as $bencana): ?>
	        			<option value="<?= $bencana['id'] ?>"><?= $bencana['lokasi'] ?></option>
	        		<?php endforeach; ?>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Relawan</label>
        		<select class="form-control" name="id_relawan" onchange="showRelawan(this)">
        			<option value="">- PILIH -</option>
        			<?php foreach($relawan as $relawan): ?>
	        			<option value="<?= $relawan['id'] ?>"><?= $relawan['nama_lengkap'] ?></option>
	        		<?php endforeach; ?>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Bencana</label>
        		<input type="text" class="form-control" id="show-bencana" readonly>
        	</div>
        	<div class="row">
        		<div class="col-6">
		        	<div class="form-group">
		        		<label>Level</label>
		        		<input type="text" class="form-control" id="show-level" readonly>
		        	</div>
        		</div>
        		<div class="col-6">
		        	<div class="form-group">
		        		<label>Radius</label>
		        		<input type="text" class="form-control" id="show-radius" readonly>
		        	</div>
        		</div>
        	</div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Tambah Data</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	const getData = async (id) => {
		return await axios.get("<?= base_url('api/get/bencana/') ?>" + id).then(res => res.data);
	}

	const showBencana = async (target) => {
		let result = null;

		const id = target.value;

		if(id != "") {
			result = await getData(id).then(res => res);
		}

		console.info(result);
		
		if(result) {
			document.getElementById('show-bencana').value = result.jenis;
			document.getElementById('show-level').value = result.level;
			document.getElementById('show-radius').value = result.radius;
		} else {
			document.getElementById('show-bencana').value = "";
			document.getElementById('show-level').value = "";
			document.getElementById('show-radius').value = "";
		}
	}
</script>