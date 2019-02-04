<div id="wrapper" style="margin-top:3%">
  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <p class="text-right">
            <a class="btn btn-primary" href="<?=site_url('/User/add') ?>"> Tambah User</a>
          </p>
          <h4 class="text-left">Tabel User</h4>
          <div class="alert alert-success" role="alert">
					       <?php echo $this->session->flashdata('success'); ?>
				</div>
        </div>
        <div class="card-body">
          <table id="users" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Gender</th>
              <th>No.Telepon</th>
              <th>Pekerjaan</th>
              <th>Photo</th>
              <th>action</th>
          </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
              <td><?=$no++?></td>
              <td><?=$user->nama;?></td>
              <td><?=$user->email?></td>
              <td><?php if($user->gender == "L"){ echo "Laki-Laki"; } else{echo " Perempuan";} ?></td>
              <td><?=$user->no_telepon?></td>
              <td><?=$user->pekerjaan?></td>
              <td><?=$user->photo?></td>
              <td>
                <a onclick="deleteConfirm('<?php echo site_url('User/delete/'.$user->id) ?>')"
									href="#!" class="btn btn-small text-danger">Hapus</a>
              </td>
          </tr>
        <?php } ?>
      </tbody>
  </table>
        </div>
        <div class="col-12">
          <div class="text-right" style="margin: 2% 2%">
            <input class="btn btn-success btn-save " type="submit" name="btn" value="Save" />
          </div>
        </div>
     </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus data ini?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Ok</a>
      </div>
    </div>
  </div>
</div>
