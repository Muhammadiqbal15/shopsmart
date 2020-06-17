<?php if ($this->session->userdata('role_id') == 2) : ?>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>Home/index" class="nav-link"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link" data-target="#kalkulator" data-toggle="modal"><i class="fas fa-calculator"></i> Calculator</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <?= $user['nama']; ?>
                        <img src="<?= base_url(); ?>assets/img/<?= $user['foto']; ?>" class="img-circle elevation-2 img-fluid" alt="Foto Profile" width="30" height="30">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <h5 style="color: white;">Selamat Datang <br><?= $user['nama']; ?></h3>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>User/index" class="nav-link">
                                <i class="nav-icon far fa-user-circle"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>User/baranguser" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>User/Pembeliuser" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Pembeli</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>User/keranjanguser" class="nav-link">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>Keranjang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>User/pesananuser" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>Pesanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header mt-5">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Ubah Password</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="ubahpw" data-ubahpw="<?= $this->session->flashdata('pwdone'); ?>"></div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-6 connectedSortable">
                            <div class="card mb-3 p-4">
                                <?= $this->session->flashdata('pwsalah'); ?>
                                <form action="<?= base_url(); ?>/User/ubahpassword" method="POST">
                                    <div class="form-group">
                                        <label for="pwlama">Password Saat Ini</label>
                                        <input type="password" class="form-control" id="pwlama" name="pwlama" placeholder="Password Saat Ini">
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('pwlama'); ?>
                                    </small>
                                    <div class="form-group">
                                        <label for="pwbaru">Password Baru</label>
                                        <input type="password" class="form-control" id="pwbaru" name="pwbaru" placeholder="Password Baru">
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('pwbaru'); ?>
                                    </small>
                                    <div class="form-group">
                                        <label for="pwbaru2">Ulangi Password Baru</label>
                                        <input type="password" class="form-control" id="pwbaru2" name="pwbaru2" placeholder="Ulangi Password Baru">
                                    </div>
                                    <small class="text-danger">
                                        <?= form_error('pwbaru2'); ?>
                                    </small>
                                    <button class="btn btn-success" type="submit" name="ubah">Change Password</button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php else : ?>
    <?php redirect('Admin/index'); ?>
<?php endif; ?>

<div class="modal fade modal-sm" id="kalkulator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Calculator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputangka">Angka : </label>
                        <input type="text" class="form-control" id="inputangka">
                    </div>
                </div>
                <div class="form-group">
                    <label for="hasil">Hasil : </label>
                    <input type="text" class="form-control" id="hasil">
                </div>

                <div>
                    <button class="btn btn-primary btn-lg" onclick="getdata('1')">1</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('2')">2</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('3')">3</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('+')">+</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('-')">-</button>
                </div>
                <div class="mt-1">
                    <button class="btn btn-primary btn-lg" onclick="getdata('4')">4</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('5')">5</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('6')">6</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('*')">*</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('/')">/</button>
                </div>
                <div class="mt-1">
                    <button class="btn btn-primary btn-lg" onclick="getdata('7')">7</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('8')">8</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('9')">9</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('(')">(</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata(')')">)</button>
                </div>
                <div class="mt-1">
                    <button class="btn btn-primary btn-lg" onclick="getdata('0')">0</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('**')">^</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('.')">.</button>
                    <button class="btn btn-primary btn-lg" onclick="getdata('%')">%</button>
                </div>
                <div class="mt-1">
                    <button class="btn btn-success btn-lg" onclick="inputvalidation()">=</button>
                    <button class="btn btn-danger btn-lg" onclick="clearAll()">C</button>
                </div>
            </div>
        </div>
    </div>
</div>