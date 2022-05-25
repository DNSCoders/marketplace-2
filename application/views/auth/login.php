<?php echo $this->session->flashdata('verification'); ?>
<div class="wrapper">
    <!-- <a href="<?= base_url(); ?>"><h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2></a>
    <p class="subtitle">Silakan login ke akun sekarang</p>
    <?php echo $this->session->flashdata('failed'); ?>
    <form action="<?= base_url(); ?>login?redirect=<?= $redirect; ?>" method="post">
        <div class="form-group">
            <input type="email" placeholder="Alamat Email"  name="email" class="form-control"  autocomplete="off" value="<?php echo set_value('email'); ?>">
            <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password"  name="password" class="form-control"  autocomplete="off">
            <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
        </div>
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember">
            <label class="custom-control-label" for="remember">Ingat Saya</label>
        </div>
        <button type="submit" class="btn btn-block btn-dark mt-3 mb-1">Login</button>
        <a href="<?= base_url(); ?>reset-password">Lupa password?</a>
        <hr>
        <p class="text-lead">Atau belum punya akun? <a href="<?= base_url(); ?>register">Daftar</a> sekarang</p>
    </form>

     -->

    <img src="<?= base_url() ?>/assets/images/login.png" alt="login" class="logo">
    <div class="content">
        <div class="box">
            <form action="<?= base_url(); ?>login?redirect=<?= $redirect; ?>" method="post">
                <div class="form-group input-form">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" placeholder="Alamat Email" name="email" class="form-control" autocomplete="off" value="<?php echo set_value('email'); ?>">
                    <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
                </div>

                <div class="form-group input-form">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
                    <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
                </div>

                <div class="forgot-password">
                    <a href="<?= base_url(); ?>reset-password">Forgot Password?</a>
                </div>

                <div class="button-action">
                    <button type="submit" class="btn btn-block login-btn">Login</button>
                    <button class="btn btn-block btn-dark mt-3 mb-1 register-btn">
                        <a href="<?= base_url(); ?>register">Daftar</a>
                    </button>
                </div>

                <hr />

                <div class="google-btn">
                    <button type="submit" class="btn btn-block">
                        <img src="<?= base_url() ?>/assets/images/icon/google.png" style="margin-right: 5px;">Google</button>
                </div>
            </form>
        </div>
    </div>
</div>