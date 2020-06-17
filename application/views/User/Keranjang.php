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
        <div class="keranjang" data-keranjang="<?= $this->session->flashdata('keranjang'); ?>"></div>
        <div class="cart" data-cart="<?= $this->session->flashdata('cart'); ?>"></div>
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
                            <h1 class="m-0 text-dark">Keranjang Belanja Anda</h1>
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
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Sub-Total</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($this->cart->contents() as $items) : ?>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['qty']; ?></td>
                                                    <td>Rp.<?= number_format($items['price'], 0, ',', '.'); ?></td>
                                                    <td>Rp.<?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>User/deletekeranjang/<?= $items['rowid']; ?>" class="btn btn-danger  btn-sm hapus-brgkrjng"><i class="fas fa-trash"></i> Hapus</a>
                                                        <a href="<?= base_url(); ?>Home/Beli/<?= $items['id']; ?>/<?= $items['rowid']; ?>" class="btn btn-primary btn-sm"><i class="far fa-money-bill-alt"></i> Bayar</a>
                                                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-comments"> Chat</i></a>
                                                        <a href="<?= base_url(); ?>User/keranjang/<?= $items['id']; ?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i> Tambah</a>
                                                        <a href="<?= base_url(); ?>User/kurangcart/<?= $items['rowid']; ?>/<?= $items['qty']; ?>" class="btn btn-sm btn-outline-danger"><i class="fas fa-minus"></i> Kurang</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td>
                                                Rp.<?= number_format($this->cart->total(), 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>User/deleteall" class="btn btn-danger btn-sm delete-semua"><i class="fas fa-trash"></i> Hapus Semua</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
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