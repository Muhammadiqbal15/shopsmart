<style>
    .figure {
        max-width: 300px;
        min-height: 150px;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
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
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url(); ?>assets/AdminLTE-master/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <h3 style="color: white;">Admin</h3>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/index" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/Userblock" class="nav-link">
                                <i class="nav-icon fas fa-user-alt-slash"></i>
                                <p>Data User Terblock</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/barangjualuser" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/transaksiuser" class="nav-link">
                                <i class="nav-icon fas fa-search-dollar"></i>
                                <p>Transaksi User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/ubahbanner" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>Banner Home</p>
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

        <br><br><br>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Ubah Banner Home</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header">Ubah Gambar</h5>
                                <div class="card-body">
                                    <form action="<?= base_url(); ?>Admin/updatebnnr" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id_gb" value="<?= $gmbr->id_gambar ?>">
                                        <div class="form-group">
                                            <label for="gb1">Example file input</label>
                                            <input type="file" class="form-control-file" id="gb1" name="gb1" value="<?= $gmbr->gb_1 ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="gb2">Example file input</label>
                                            <input type="file" class="form-control-file" id="gb2" name="gb2">
                                        </div>
                                        <div class="form-group">
                                            <label for="gb3">Example file input</label>
                                            <input type="file" class="form-control-file" id="gb3" name="gb3">
                                        </div>
                                        <a href="<?= base_url(); ?>Admin/ubahbanner" class="btn btn-success"><i class="fas fa-sign-out-alt"></i> Kembali</a>
                                        <button class="btn btn-primary" name="ubahbanner" type="submit"><i class="fas fa-edit"></i> Ubah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <h5 class="card-header">Foto/Gambar</h5>
                                <div class="card-body">
                                    <figure class="figure">
                                        <img src="<?= base_url(); ?>assets/img/<?= $gmbr->gb_1 ?>" class="figure-img img-fluid rounded" alt="...">
                                        <figcaption class="figure-caption">Foto/Gambar 1</figcaption>
                                    </figure>
                                    <figure class="figure">
                                        <img src="<?= base_url(); ?>assets/img/<?= $gmbr->gb_2 ?>" class="figure-img img-fluid rounded" alt="...">
                                        <figcaption class="figure-caption">Foto/Gambar 2</figcaption>
                                    </figure>
                                    <figure class="figure">
                                        <img src="<?= base_url(); ?>assets/img/<?= $gmbr->gb_3 ?>" class="figure-img img-fluid rounded" alt="...">
                                        <figcaption class="figure-caption">Foto/Gambar 3</figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery-3.4.1.min.js"></script>