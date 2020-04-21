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
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Data Barang</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url(); ?>Admin/Pembeli" class="nav-link">
                                    <i class="nav-icon fas fa-cash-register"></i>
                                    <p>Data Pembeli</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url(); ?>Auth/logout" class="nav-link tombol-logout">
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

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Data Pembeli</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php foreach ($sumBarang as $sb) ?>
                                        <h3><?= $sb->jumlah; ?></h3>
                                        <p>Barang Masuk</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-tag "></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <?php foreach ($sumPembeli as $sp) ?>
                                        <h3><?= $sp->jmlfixed_pembeli; ?></h3>
                                        <p>Pembeli</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <?php foreach ($sumbarangterjual as $sbt) ?>
                                        <h3><?= $sbt->jumlah_brg; ?></h3>
                                        <p>Barang Yang Terjual</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                            <section class="col-lg-12 connectedSortable">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-bordered table-head-fixed" id="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id</th>
                                                    <th>Nama Pembeli</th>
                                                    <th>No.Telp</th>
                                                    <th>Alamat</th>
                                                    <th>Barang Pesanan</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Pengiriman</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pembeli as $pb) :  ?>
                                                    <tr>
                                                        <th scope="row"><?= ++$start; ?></th>
                                                        <td><?= $pb->id_pembeli ?></td>
                                                        <td><?= $pb->nama ?></td>
                                                        <td><?= $pb->notelp ?></td>
                                                        <td>
                                                            <a href="" id="detail" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal" data-provinsi="<?= $pb->nama_provinsi ?>" data-kota="<?= $pb->nama_kota ?>" data-kecamatan="<?= $pb->nama_kecamatan; ?>" data-kelurahan="<?= $pb->nama_kelurahan ?>" data-alamat="<?= $pb->alamat ?>"><i class="fas fa-eye"></i> Detail</a>
                                                        </td>
                                                        <td><?= $pb->nama_brg ?></td>
                                                        <td><?= $pb->harga_brg ?></td>
                                                        <td><?= $pb->jumlah_brg ?></td>
                                                        <td><?= $pb->pengiriman ?></td>
                                                        <td>
                                                            <a href="<?= base_url(); ?>Admin/hapuspembeli/<?= $pb->id_pembeli ?>" class="btn btn-danger btn-sm hapus_pembeli"><i class="fas fa-trash-alt"></i> Hapus</a>
                                                        </td>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <h6>Alamat : <span id="alamat"></span></h6>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    "paging": false

                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '#detail', function() {
                    var provinsi = $(this).data('provinsi');
                    var kota = $(this).data('kota');
                    var kecamatan = $(this).data('kecamatan');
                    var kelurahan = $(this).data('kelurahan');
                    var alamat = $(this).data('alamat');
                    $('#provinsi').text(provinsi);
                    $('#kota').text(kota);
                    $('#kecamatan').text(kecamatan);
                    $('#kelurahan').text(kelurahan);
                    $('#alamat').text(alamat);
                })
            })
        </script>