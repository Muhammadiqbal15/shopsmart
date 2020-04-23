<div class="register-box col-lg-6">
    <div class="register-logo">
        <h3>Registration</h3>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new Account</p>

            <form action="<?= base_url(); ?>Auth/registrasi" method="post">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= set_value('nama'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('nama'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
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
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('password'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Ulangi password" name="re-pass">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('re-pass'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nomor telepon" name="nomortlp" value="<?= set_value('nomortlp'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <small class="text-danger">
                    <?= form_error('nomortlp'); ?>
                </small>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" placeholder="Tanggal lahir" name="tgllahir">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="far fa-calendar-alt"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Provinsi" name="Provinsi" value="<?= set_value('Provinsi'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger">
                            <?= form_error('Provinsi'); ?>
                        </small>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="Kota" value="<?= set_value('Kota'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger">
                            <?= form_error('Kota'); ?>
                        </small>
                    </div>
                </div>
                <div class="form-row mt-3 mb-3">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kecamatan" name="Kecamatan" value="<?= set_value('Kecamatan'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger">
                            <?= form_error('Kecamatan'); ?>
                        </small>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kelurahan/Desa" name="Kelurahan" value="<?= set_value('Kelurahan'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <small class="text-danger">
                            <?= form_error('Kelurahan'); ?>
                        </small>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Alamat Lengkap" value="<?= set_value('alamat'); ?>"></textarea>
                    <small class="text-danger">
                        <?= form_error('alamat'); ?>
                    </small>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <a href="<?= base_url() ?>Auth/index" class="text-center mt-5">I already have a account</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>