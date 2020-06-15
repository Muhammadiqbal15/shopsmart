<div class="login-box">
    <div class="login-logo">
        <h3>Ubah Password</h3>
    </div>
    <!-- /.login-logo -->
    <div class="regist" data-regist="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Ubah Password Untuk</p>
            <p class="login-box-msg"><?= $this->session->userdata('reset_email');   ?></p>
            <?= $this->session->flashdata('eroremail'); ?>
            <form action="<?= base_url() ?>Auth/changePassword" method="post">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Enter New Password" name="password1" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('password1'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Repeat New Password" name="password2" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('password2'); ?>
                </small>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" name="Reset">Ubah Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>