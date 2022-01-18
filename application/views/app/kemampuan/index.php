<div class="container-fluid">
	<div class="row">
		<div class="col-12 my-2">
			<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Terjunkan Relawan</button>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h3 class="mb-3">Kemampuan</h3>		
					<table class="table table-hovered">
						<thead>
							<th>#</th>
							<th>Nama</th>
							<th>Asal</th>
							<th>Lokasi Bencana</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>Insan Kamil</td>
								<td>Daerah Istimewa Yogyakarta</td>
								<td>Jawa Timur</td>
								<td>
									<button type="button" class="badge badge-primary badge-sm w-100">Detail</button>
								</td>
							</tr>
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
      <form action="<?= base_url('app/bencana/tanggap/tambah') ?>" method="post">
	      <div class="modal-body">
	        <div class="form-group">
	        	<p>Nanti akan ada rekomendasi sesuai profil relawan</p>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>