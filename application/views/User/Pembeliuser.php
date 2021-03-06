<?php if ($this->session->userdata('role_id') == 2) : ?>
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <?= $user['nama']; ?>
                        <img src="<?= base_url(); ?>assets/img/<?= $user['foto']; ?>" class="img-circle elevation-2 img-fluid" alt="Foto Profile" width="30" height="30">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <div class="kirim" data-kirim="<?= $this->session->flashdata('kirim'); ?>"></div>
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
        <br><br><br><br>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            

            <div class="row m-auto mt-5">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php foreach ($jmlbrg as $jb) ?>
                            <h3><?= $jb->stokawal ?></h3>
                            <p>Total Stok Awal</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
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
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php foreach ($brg_terjual as $brt) ?>
                            <h3><?= $brt->jumlah_brg ?></h3>
                            <p>Barang Yang Terjual</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php foreach ($sisabarang as $sb) ?>
                            <h3><?= $sb->stoksisa ?></h3>
                            <p>Total Stok Tersisa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                    </div>
                </div>

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0 text-dark">Data Pembeli</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                 </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="card">
                                <table class="table table-bordered table-hover table-responsive mt-3" id="mytable">
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
                                            <th>Status</th>
                                            <th>Opsi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pembeli as $pb) : ?>
                                            <tr>
                                                <td><?= ++$start; ?></td>
                                                <td><?= $pb['nama_pb']; ?></td>
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
                                                <td><?= $pb['status_brg']; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>User/hapuspembeli/<?= $pb['id_pembeli']; ?>" class="btn btn-danger btn-sm hapus-pembeli"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                                <?php  if($pb['status_brg'] == 'Sudah Dikirim') : ?>
                                                <td><button class="btn btn-success btn-sm"><i class="fas fa-check"></i> Terkirim</button></td>
                                                <?php  else: ?>
                                                <td>
                                                    <a href="<?= base_url(); ?>User/tp_kirimbarang/<?= $pb['id_pembeli']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Kirim</a>
                                                </td>
                                               <?php  endif; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?= $this->pagination->create_links(); ?>
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
    <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                "paging": false
            });
        });
    </script>
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

<?php else : ?>
    <?php redirect('Admin/index'); ?>
<?php endif; ?>