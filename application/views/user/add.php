<div id="wrapper" style="margin-top:3%">
  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <a href="<?=site_url() ?>"> Back</a>
          <h4 class="text-right">Input User</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url('User/add') ?>" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" name="email" placeholder="Masukan alamat email">
                <div class="invalid-feedback">
                    <?php echo form_error('email') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" id="password" name="password" placeholder="Masukan password">
                <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="re-password">Ulangi Password</label>
                <input type="password" class="form-control <?php echo form_error('password_confirmation') ? 'is-invalid':'' ?>" id="password_confirmation" name="password_confirmation" placeholder="Masukan Ulang password">
                <div class="invalid-feedback">
                    <?php echo form_error('password_confirmation') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" name="nama" placeholder="Masukan Nama anda">
                <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="nama">Gender</label>
                <div class="form-check">
                  <div class="row">
                    <div class="col-md-1">
                      <input class="form-check-input" type="radio" name="gender" id="gender" value="L" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Laki Laki
                      </label>
                    </div>

                    <div class="col-md-1">
                      <input class="form-check-input" type="radio" name="gender" id="gender" value="P" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="invalid-feedback">
                    <?php echo form_error('gender') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="nama">Nomor Telepon</label>
                <input type="number" class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>" id="no_telepon" name="no_telepon" placeholder="Masukan Nomor Telepon">
                <div class="invalid-feedback">
                    <?php echo form_error('no_telepon') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                  <label for="pekerjaan">Pekerjaan</label>
                  <select class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>" id="pekerjaan" name="pekerjaan">
                    <option value="karyawan swasta">Karyawan Swasta</option>
                    <option value="pagawai negeri">Pegawai Negeri</option>
                    <option value="belum bekerja">Belum Bekerja</option>
                  </select>
                  <div class="invalid-feedback">
                      <?php echo form_error('pekerjaan') ?>
                  </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="photo">Photo</label>
                  <input type="file" class="form-control <?php echo form_error('photo') ? 'is-invalid':'' ?>" name="photo" id="photo">
                  <div class="invalid-feedback">
                      <?php echo form_error('photo') ?>
                    </div>
              </div>
            </div>
        </div>
        <div class="col-12">
          <div class="text-right" style="margin: 2% 2%">
            <input class="btn btn-success btn-save" type="submit" name="btn" value="Save" />
          </div>
        </div>
      </form>
     </div>
    </div>
  </div>
</div>
