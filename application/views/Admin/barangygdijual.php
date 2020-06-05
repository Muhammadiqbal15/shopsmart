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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
                        <!-- /.info-box-content -->
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
                        <!-- /.info-box-content -->
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
                        <!-- /.info-box-content -->
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
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Total User</span>
                            <span class="info-box-number"><?= $sumuser - 1; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Data Barang Yang Dijual User</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <a href="<?= base_url() ?>Admin/pdfbarang" class="btn btn-danger ml-3 mb-2"><i class="fas fa-file"></i> Export PDF</a>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="popuplogin" data-popuplogin="<?= $this->session->flashdata('popup'); ?>"></div>
                        <section class="col-lg-12 connectedSortable">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-head-fixed mt-3" id="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id</th>
                                                <th>Barang</th>
                                                <th>Harga</th>
                                                <th>Foto</th>
                                                <th>Jenis Barang</th>
                                                <th>Stok Awal</th>
                                                <th>Stok Sisa</th>
                                                <th>Pembayaran</th>
                                                <th>Penjual</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($barang as $brg) : ?>
                                                <tr>
                                                    <td><?= ++$start ?></td>
                                                    <td><?= $brg['id_barang']; ?></td>
                                                    <td><?= $brg['nama_barang']; ?></td>
                                                    <td><?= $brg['harga_barang']; ?></td>
                                                    <td><img src="<?= base_url(); ?>assets/img/<?= $brg['gambar'];; ?>" alt="" width="70" height="70"></td>
                                                    <td><?= $brg['jenis_barang']; ?></td>
                                                    <td><?= $brg['stokawal']; ?></td>
                                                    <td><?= $brg['stoksisa']; ?></td>
                                                    <td><?= $brg['ebanking']; ?>&<?= $brg['emoney']; ?></td>
                                                    <td><?= $brg['nama'];   ?></td>
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
        </div>
    </div>


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
</body>



<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "paging": false

        });
    });
</script>

</div>