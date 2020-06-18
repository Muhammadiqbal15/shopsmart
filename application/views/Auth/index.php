<div class="login-box">
    <div class="login-logo">
        <h3>Login</h3>
    </div>
    <!-- /.login-logo -->
    <div class="regist" data-regist="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login To Your Account</p>
            <?= $this->session->flashdata('eroremail'); ?>
            <form action="<?= base_url() ?>Auth/index" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('email'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('password'); ?>
                </small>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" name="login">Log In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- /.social-auth-links -->

            <p class="mb-1 mt-3">
                <a href="<?= base_url(); ?>Auth/forgotpassword">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url(); ?>Auth/registrasi" class="text-center">Create new account</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    <h6>Akun Admin</h6>
    <h6>Email : admin150303@gmail.com</h6>
    <h6>Password : admin123</h6>
    <br>
    <h6>Akun User Utama 1</h6>
    <h6>Email : m44iqbal@gmail.com</h6>
    <h6>Password : 1235678</h6>
    <br>
    <h6>Akun User Utama 2</h6>
    <h6>Email : taufikherul12@gmail.com</h6>
    <h6>Password : 11111111</h6>
</div>