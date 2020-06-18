<body class="hold-transition sidebar-mini layout-fixed">
    `<div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li   li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>Home/index" class="nav-link"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link" data-target="#kalkulator" data-toggle="modal"><i class="fas fa-calculator"></i> Calculator</a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">        
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url(); ?>assets/AdminLTE-master/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <h3 style="color: white;">Admin</h3>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/index" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Total User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/useraktif" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>Data User Aktif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/usertdkaktif" class="nav-link">
                                <i class="nav-icon fas fa-user-times"></i>
                                <p>Data User Tidak Aktif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/barangjualuser" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/brgterkirim" class="nav-link">
                                <i class="nav-icon fas fa-check"></i>
                                <p>Barang Tekirim</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Admin/brgblmterkirim" class="nav-link">
                                <i class="nav-icon fas fa-times"></i>
                                <p>Barang Belum Terkirim</p>
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
            </div>
        </aside>
        <br><br><br>
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="row m-auto mt-5">

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class=" fas fa-search-dollar"></i>
                    </span>
                    <?php foreach ($transaksi as $ts) ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Transaksi Antar User</span>
                        <span class="info-box-number"><?= $ts->jmlfixed_pembeli ?></span>
                    </div>                    
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <?php foreach ($stokawal as $jb) ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Stok Barang User</span>
                        <span class="info-box-number"><?= $jb->stokawal ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success">
                        <i class="fas fa-cart-plus"></i>
                    </span>
                    <?php foreach ($brgterjual as $bt) ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Barang Terjual User</span>
                        <span class="info-box-number"><?= $bt->jumlah_brg ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger">
                        <i class="fas fa-cart-arrow-down"></i>
                    </span>
                    <?php foreach ($sisa as $sb) ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Sisa Barang User</span>
                        <span class="info-box-number"><?= $sb->stoksisa ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total User</span>
                        <span class="info-box-number"><?= $sumuser; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success">
                        <i class="fas fa-users"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">User Aktif</span>
                        <span class="info-box-number"><?= $useraktif; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger">
                        <i class="fas fa-users"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">User Tidak Aktif</span>
                        <span class="info-box-number"><?= $usertdkaktif; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Barang Sudah Terkirim</span>
                        <span class="info-box-number"><?= $sumbrgterkirim; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger">
                        <i class="fas fa-times"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Barang Belum Terkirim</span>
                        <span class="info-box-number"><?= $sumbrgblmterkirim; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Barang Sudah Terkirim</h1>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?= base_url() ?>Admin/Pdfbrgterkirim" class="btn btn-danger ml-3 mb-2"><i class="fas fa-file"></i> Export PDF</a>
        <a href="<?= base_url() ?>Admin/excelbrgterkirim" class="btn btn-success mb-2"><i class="fas fa-file"></i> Export EXCEL</a>
        <a href="<?= base_url() ?>Admin/printbrgterkirim" class="btn btn-primary mb-2"><i class="fas fa-print"></i> Print</a>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 connectedSortable">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered table-head-fixed table-responsive table-hover mt-3 " id="table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Total Harga</th>
                                        <th>Pengiriman</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                        <th>Penerima</th>
                                        <th>No.Telp Penerima</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Provinsi</th>
                                        <th>Kota/Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan/Desa</th>
                                        <th>Pengirim</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($brgterkirim as $bt) : ?>
                                        <tr>
                                            <td><?= ++$start; ?></td>
                                            <td><?= $bt['id_barang']; ?></td>
                                            <td><?= $bt['nama_brg']; ?></td>
                                            <td><?= $bt['harga_brg']; ?></td>
                                            <td><?= $bt['jumlah_brg']; ?></td>
                                            <td><?= $bt['tot_hrg']; ?></td>
                                            <td><?= $bt['pengiriman']; ?></td>
                                            <td><?= $bt['pembayaran']; ?></td>
                                            <td><?= $bt['status_brg']; ?></td>
                                            <td><?= $bt['nama_pb']; ?></td>
                                            <td><?= $bt['notelp']; ?></td>
                                            <td><?= $bt['alamat']; ?></td>
                                            <td><?= $bt['provinsi']; ?></td>
                                            <td><?= $bt['kota']; ?></td>
                                            <td><?= $bt['kecamatan']; ?></td>
                                            <td><?= $bt['kelurahan']; ?></td>
                                            <td><?= $bt['nama']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?= $this->pagination->create_links(); ?>
                    </section>
                </div>
            </div>
        </section>
    </div>`
</body>