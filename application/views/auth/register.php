<div class="wrapper">
  <!-- <a href="<?= base_url(); ?>"><h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2></a>
    <p class="subtitle">Daftar akun baru sekarang</p>
    <?php echo $this->session->flashdata('failed'); ?> -->
  <!-- <form action="<?= base_url(); ?>register" method="post">
        <div class="form-group">
            <input type="text" placeholder="Nama Lengkap"  name="name" class="form-control"  autocomplete="off" value="<?php echo set_value('name'); ?>">
            <small class="form-text text-danger pl-1"><?php echo form_error('name'); ?></small>
        </div>
        <div class="form-group">
            <input type="email" placeholder="Alamat Email"  name="email" class="form-control"  autocomplete="off" value="<?php echo set_value('email'); ?>">
            <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password"  name="password" class="form-control"  autocomplete="off">
            <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Konfirmasi Password"  name="password1" class="form-control"  autocomplete="off">
            <small class="form-text text-danger pl-1"><?php echo form_error('password1'); ?></small>
        </div>
        <small class="text-muted">Saya telah membaca dan menyetujui <a href="<?= base_url(); ?>terms" target="_blank">Syarat dan Ketentuan</a> serta <a href="<?= base_url(); ?>privacy-policy" target="_blank">Kebijakan Privasi</a> <?= $this->Settings_model->general()["app_name"]; ?></small>
        <button type="submit" class="btn btn-block btn-dark mt-3">Daftar</button>
        <hr>
        <p class="text-lead">Atau sudah punya akun? <a href="<?= base_url(); ?>login">Login</a> sekarang</p>
    </form> -->

  <img src="<?= base_url() ?>/assets/images/login.png" alt="login" class="logo">
  <div class="content">
    <div class="box">
      <?php echo $this->session->flashdata('failed'); ?>
      <form action="<?= base_url(); ?>register" method="post">
        <div class="form-group input-form">
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input type="text" placeholder="Nama Lengkap" name="name" class="form-control" autocomplete="off" value="<?php echo set_value('name'); ?>">
          <small class="form-text text-danger pl-1"><?php echo form_error('name'); ?></small>
        </div>

        <div class="form-group input-form">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" placeholder="Alamat Email" name="email" class="form-control" autocomplete="off" value="<?php echo set_value('email'); ?>">
          <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
        </div>

        <div class="form-group input-form">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" placeholder="Konfirmasi Password" name="password" class="form-control" autocomplete="off">
          <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
        </div>

        <div class="form-group input-form">
          <label for="exampleInputEmail1">Konfirmasi Password</label>
          <input type="password" placeholder="Konfirmasi Password" name="password1" class="form-control" autocomplete="off">
          <small class="form-text text-danger pl-1"><?php echo form_error('password1'); ?></small>
        </div>

        <div class="forgot-password">
          <small class="text-muted">Saya telah membaca dan menyetujui <a href="<?= base_url(); ?>terms" target="_blank">Syarat dan Ketentuan</a> serta <a href="<?= base_url(); ?>privacy-policy" target="_blank">Kebijakan Privasi</a> <?= $this->Settings_model->general()["app_name"]; ?></small>
        </div>

        <div class="button-action" style="margin-top:1rem;">
          <button type="submit" class="btn btn-block login-btn">Daftar</button>
          <button class="btn btn-block btn-dark mt-3 mb-1 register-btn">
            <a href="<?= base_url(); ?>login">Login</a>
          </button>
        </div>

        <!-- <hr /> -->

        <!-- <div class="google-btn">
          <button type="submit" class="btn btn-block">
            <img src="<?= base_url() ?>/assets/images/icon/google.png" style="margin-right: 5px;">Google</button>
        </div> -->
      </form>
    </div>
  </div>
</div>

<?php if ($this->session->flashdata('success')) { ?>
  <div class="modal fade" id="modalRegisterSuccess" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 400px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Registrasi Berhasil</h5>
        </div>
        <div class="modal-body">
          <p class="text-center h1"><i class="fa text-dark fa-envelope-open-text"></i></p>
          <p class="text-muted">Kami telah mengirimkan email verifikasi akun ke email Anda. Silakan cek inbox atau spam.</p>
          <a href="<?= base_url(); ?>login" class="btn btn-block btn-dark">Ke halaman login</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>