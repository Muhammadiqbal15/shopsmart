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
    </nav>
    <!-- /.navbar -->


    <div class="crud" data-crud="<?= $this->session->flashdata('crud'); ?>"></div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url(); ?>assets/img/<?= $user['foto']; ?>" class="rounded-circle mt-2 img-fluid" alt="Foto Profile">
                </div>
            </div>

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
        <div class="row m-auto mt-5">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
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
                                                <td><?= $pb['pengiriman']; ?></td>
                                                <td><?= $pb['pembayaran']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Chat</a>
                                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
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