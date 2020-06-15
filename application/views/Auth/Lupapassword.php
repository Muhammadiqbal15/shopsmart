<div class="login-box">
    <div class="login-logo">
        <h3>Reset Password</h3>
    </div>
    <!-- /.login-logo -->
    <div class="regist" data-regist="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Lupa Password?</p>
            <?= $this->session->flashdata('eroremail'); ?>
            <form action="<?= base_url() ?>Auth/forgotpassword" method="post">
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
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" name="Reset">Reset Password</button>
                    </div>
                </div>
            </form>
            <p class="mb-2 mt-3">
                <a href="<?= base_url(); ?>Auth/index" class="text-center">Kembali Ke Login</a>
            </p>
        </div>
    </div>
</div>