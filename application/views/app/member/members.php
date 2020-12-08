<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Member</a></li>
            <li class="breadcrumb-item active">Members</li>
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
              <h3 class="card-title">Members</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Pekerjaan</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>Lainnya</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($members as $member): ?>
                  	<tr>
                  		<td class="text-center"><?= $member['NIK'] ?></td>
                  		<td class="text-center"><?= $member['nama'] ?></td>
                  		<td class="text-center"><?= $member['tempat_lahir'] ?>,  <?= date('d M Y', strtotime($member['tanggal_lahir'])) ?></td>
                  		<td class="text-center"><?= $member['pekerjaan'] ?></td>
                  		<td class="text-center"><?= $member['email'] ?></td>
                  		<td class="text-center"><?= $member['no_telp'] ?></td>
                  		<td class="text-center">
                  			<a href="#!" class="text-warning" data-toggle="modal" data-target="#openModal" onclick="get_view_data(this)" user_id="<?= $member['ID'] ?>">
                          <i class="fas fa-fw fa-folder-open"></i>    
                        </a>
                  			<a href="#!" class="text-info">
                          <i class="fas fa-fw fa-edit"></i>
                        </a>
                  			<a href="#!" class="text-danger" data-toggle="modal" data-target="#deleteModal" user_id="<?= $member['ID'] ?>" onclick="get_delete_data(this)">
                          <i class="fas fa-fw fa-trash"></i>
                        </a>
                  		</td>
                  	</tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="text-center">
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Pekerjaan</th>
                    <th>Email</th>
                    <th>No Telpon</th>
                    <th>Lainnya</th>
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
<div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="openModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 70% !important;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="openModalLabel">Detail Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="view_NIK">NIK</label>
          <input type="text" class="form-control" id="view_NIK" readonly>
        </div>
        <div class="form-group">
          <label for="view_nama">Nama</label>
          <input type="text" class="form-control" id="view_nama" readonly>
        </div>
        <div class="form-group">
          <label for="view_ttl">Tempat, Tanggal Lahir</label>
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" id="view_tempat_lahir" readonly>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="view_tanggal_lahir" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="view_jenis_kelamin">Jenis Kelamin</label>
          <input type="text" class="form-control" id="view_jenis_kelamin" readonly>
        </div>
        <div class="form-group">
          <label for="view_golongan_darah">Golongan Darah</label>
          <input type="text" class="form-control" id="view_golongan_darah" readonly>
        </div>
        <div class="form-group">
          <label for="view_agama">Agama</label>
          <input type="text" class="form-control" id="view_agama" readonly>
        </div>
        <div class="form-group">
          <label for="view_pekerjaan">Pekerjaan</label>
          <input type="text" class="form-control" id="view_pekerjaan" readonly>
        </div>
        <div class="form-group">
          <label for="view_alamat">Alamat</label>
          <textarea class="form-control" id="view_alamat" readonly></textarea>
        </div>
        <div class="form-group">
          <label for="view_email">Email</label>
          <input type="text" class="form-control" id="view_email" readonly>
        </div>
        <div class="form-group">
          <label for="view_no_telp">No Telepon</label>
          <input type="text" class="form-control" id="view_no_telp" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Hapus Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('App/members/delete') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete">
          <p>Apakah anda ingin menghapus member ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  const load_data = async (id) => {
    return await axios.get('<?= base_url() ?>App/get_data/members/' + id).then(res => res.data);
  }

  const get_view_data = async (x) => {
    let id = x.getAttribute('user_id');

    let NIK = document.getElementById('view_NIK');
    let nama = document.getElementById('view_nama');
    let tempat_lahir = document.getElementById('view_tempat_lahir');
    let tanggal_lahir = document.getElementById('view_tanggal_lahir');
    let jenis_kelamin = document.getElementById('view_jenis_kelamin');
    let golongan_darah = document.getElementById('view_golongan_darah');
    let agama = document.getElementById('view_agama');
    let pekerjaan = document.getElementById('view_pekerjaan');
    let alamat = document.getElementById('view_alamat');
    let email = document.getElementById('view_email');
    let no_telp = document.getElementById('view_no_telp');

    let hasil = await load_data(id).then(res => res);
    
    NIK.value = hasil.NIK;
    nama.value = hasil.nama;
    tempat_lahir.value = hasil.tempat_lahir;
    tanggal_lahir.value = hasil.tanggal_lahir;
    jenis_kelamin.value = hasil.jenis_kelamin;
    golongan_darah.value = hasil.golongan_darah;
    agama.value = hasil.agama;
    pekerjaan.value = hasil.pekerjaan;
    alamat.innerText = hasil.alamat;
    email.value = hasil.email;
    no_telp.value = hasil.no_telp;
  }

  const get_delete_data = async (x) => {
    let id = x.getAttribute('user_id');

    let id_delete = document.getElementById('id_delete');

    id_delete.value = id;

    console.log(id);
  }

</script>