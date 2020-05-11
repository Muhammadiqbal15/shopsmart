<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top mb-5">
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
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <?= $user['nama']; ?>
                    <img src="<?= base_url(); ?>assets/img/<?= $user['foto']; ?>" class="img-circle elevation-2 img-fluid" alt="Foto Profile" width="30" height="30">
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->


    <div class="crud2" data-crud2="<?= $this->session->flashdata('crud2'); ?>"></div>
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
                        <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>Pemberitahuan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>Chat</p>
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
    <br><br><br><br>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Barang</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="row m-auto mt-5">
            <div class="col-lg-6 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <?php foreach ($jmlbrg as $jb) ?>
                        <h3><?= $jb->jumlah ?></h3>
                        <p>Barang Yang Dijual</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <?php foreach ($pembeli2 as $pb) ?>
                        <?php if ($pb) : ?>
                            <h3><?= $pb->jmlfixed_pembeli ?></h3>
                            <p>Pembeli</p>
                        <?php else : ?>
                            <h3><?php $pb = 0; ?></h3>
                            <p>Pembeli</p>
                        <?php endif; ?>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-head-fixed mt-3" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No.Telp</th>
                                            <th>Alamat</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Total Harga</th>
                                            <th>Pengiriman</th>
                                            <th>Pembayaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($pembeli as $pb) : ?>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><?= $pb['nama']; ?></td>
                                                <td><?= $pb['notelp']; ?></td>
                                                <td>
                                                    <a href="" id="almt" class="btn btn-info btn-sm" data-toggle="modal" data-target="#alamat" data-provinsi="<?= $pb['provinsi']; ?>" data-kota="<?= $pb['kota']; ?>" data-kecamatan="<?= $pb['kecamatan']; ?>" data-kelurahan="<?= $pb['kelurahan']; ?>" data-alamatlengkap="<?= $pb['alamat']; ?>">Detail
                                                    </a>
                                                </td>
                                                <td><?= $pb['nama_brg']; ?></td>
                                                <td><?= $pb['harga_brg']; ?></td>
                                                <td><?= $pb['jumlah_brg']; ?></td>
                                                <td><?= $pb['tot_hrg'] ?></td>
                                                <td><?= $pb['pengiriman']; ?></td>
                                                <td><?= $pb['pembayaran']; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>User/hapuspembeli/<?= $pb['id_pembeli']; ?>" class="btn btn-danger btn-sm hapus-pembeli"><i class="fas fa-trash"></i> Hapus</a>
                                                    <a href="" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-comments"></i> Chat</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="modal fade" id="alamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Alamat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Provinsi : <span id="provinsi"></span></h6>
                <h6>Kota : <span id="kota"></span></h6>
                <h6>Kecamatan : <span id="kecamatan"></span></h6>
                <h6>Kelurahan : <span id="kelurahan"></span></h6>
                <h6>Alamat Lengkap : <span id="alamatlengkap"></span></h6>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#almt', function() {
            var provinsi = $(this).data('provinsi');
            var kota = $(this).data('kota');
            var kecamatan = $(this).data('kecamatan');
            var kelurahan = $(this).data('kelurahan');
            var alamatlengkap = $(this).data('alamatlengkap');
            $('#provinsi').text(provinsi);
            $('#kota').text(kota);
            $('#kecamatan').text(kecamatan);
            $('#kelurahan').text(kelurahan);
            $('#alamatlengkap').text(alamatlengkap);
        })
    })
</script>