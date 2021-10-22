<div class="container py-4">
  <div class="row my-4">
    <div class="col-5 mx-auto">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center mb-4">- login -</h1>
          <form action="<?= base_url('auth/login') ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Ketikkan username..." required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Ketikkan password..." required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">MASUK APLIKASI</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>