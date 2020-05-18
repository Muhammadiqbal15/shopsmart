<?php if ($this->session->userdata('role_id') == 2) : ?>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top mb-5">
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
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
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
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
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


        <div class="crud" data-crud="<?= $this->session->flashdata('crud'); ?>"></div>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <h5 style="color: white;">Selamat Datang <br><?= $user['nama']; ?></h3>
                    </div>
                </div>
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
            </div>
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
                            <?php foreach ($pembeli as $pb) ?>
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
                            <i class="fas fa-shopping-cart"></i>
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
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <?php if (!empty(validation_errors())) : ?>
                    <div class="col-lg-12 col-6">
                        <div class="alert alert-danger" role="alert">
                            <?= form_error('namabrg'); ?>
                            <?= form_error('hargabrg'); ?>
                            <?= form_error('jml'); ?>
                        </div>
                    </div>
                <?php endif; ?>
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

            <button type="button" class="btn btn-primary mb-3 ml-3" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
                Jual Barang
            </button>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-bordered table-head-fixed mt-3" id="mytable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Foto</th>
                                                <th>Jenis</th>
                                                <th>Keterangan</th>
                                                <th>Stok Awal</th>
                                                <th>Stok Tersisa</th>
                                                <th>Pembayaran</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($barang as $brg) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $brg['nama_barang']; ?></td>
                                                    <td><?= number_format($brg['harga_barang'], 0, ',', '.'); ?></td>
                                                    <td><img src="<?= base_url(); ?>assets/img/<?= $brg['gambar']; ?>" alt="" width="70" height="70"></td>
                                                    <td><?= $brg['jenis_barang']; ?></td>
                                                    <td><?= $brg['ket_barang']; ?></td>
                                                    <td><?= $brg['stokawal'];  ?></td>
                                                    <td><?= $brg['stoksisa']; ?></td>
                                                    <td><?= $brg['ebanking']; ?>&<?= $brg['emoney']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>/User/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                        <a href="<?= base_url(); ?>/User/editbarang/<?= $brg['id_barang']; ?>" class="btn btn-primary btn-sm "><i class="fas fa-edit"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jual Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form action="<?= base_url(); ?>/User/tambah" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id user</label>
                                <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name="user" value="<?= $user['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Barang</label>
                                <input type="text" class="form-control" id="namabrg" aria-describedby="emailHelp" name="namabrg">
                            </div>
                            <small class="text-danger">
                                <?= form_error('namabrg'); ?>
                            </small>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga Barang</label>
                                <input type="text" class="form-control" id="hargabrg" name="hargabrg">
                            </div>
                            <small class="text-danger">
                                <?= form_error('hargabrg'); ?>
                            </small>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto Barang</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Barang</label>
                                <select class="form-control" id="jenis" name="jenis">
                                    <option>Laptop</option>
                                    <option>Mouse</option>
                                    <option>Keyboard</option>
                                    <option>Mousepad</option>
                                    <option>SmartPhone</option>
                                    <option>Headset&Earphone</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Keterangan">Keterangan Barang</label>
                                <select class="form-control" id="keterangan" name="ket">
                                    <option>Ada</option>
                                    <option>Kosong</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah Barang</label>
                                <input type="text" class="form-control" id="jumlah" name="jml" autocomplete="off">
                            </div>
                            <small class="text-danger">
                                <?= form_error('jml'); ?>
                            </small>
                            <div class="form-group">
                                <label for="uom">Satuan Barang</label>
                                <select class="form-control" id="uom" name="uom">
                                    <option>Unit</option>
                                </select>
                            </div>
                            <label for="" class="mt-2">Menerima Metode Pembayaran</label>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Mobile Banking</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="banking">
                                        <option>BCA Mobile Banking</option>
                                        <option>Mandiri Mobile Banking</option>
                                        <option>BNI Mobile Banking</option>
                                        <option>BRI Mobile Banking</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">E-Money</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="money">
                                        <option>OVO</option>
                                        <option>Gopay</option>
                                        <option>Paypal</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="jumlah" class="btn btn-primary mt-3">Jual</button>
                        </form>
                    </div>
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
<?php else : ?>
    <?php redirect('Admin/index'); ?>
<?php endif; ?>