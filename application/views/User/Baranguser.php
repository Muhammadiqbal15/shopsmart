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
                        <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Pembeli</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>Auth/logout" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>Cart</p>
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
                                <table class="table table-bordered table-head-fixed mt-3" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Foto</th>
                                            <th>Jenis Barang</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($barang as $brg) : ?>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><?= $brg['nama_barang']; ?></td>
                                                <td><?= $brg['harga_barang']; ?></td>
                                                <td><img src="<?= base_url(); ?>assets/img/<?= $brg['gambar']; ?>" alt="" width="70" height="70"></td>
                                                <td><?= $brg['jenis_barang']; ?></td>
                                                <td><?= $brg['ket_barang']; ?></td>
                                                <td><?= $jml; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>/User/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a>
                                                    <a href="<?= base_url(); ?>/User/editbarang/<?= $brg['id_barang']; ?>" class="btn btn-primary btn-sm">Edit</a>
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


<!-- Button trigger modal -->


<!-- Modal -->
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
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga Barang</label>
                            <input type="text" class="form-control" id="hargabrg" name="hargabrg">
                        </div>
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
                        <div class="form-group">
                            <label for="uom">Satuan Barang</label>
                            <select class="form-control" id="uom" name="uom">
                                <option>Unit</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" name="tambah">Jual</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- 
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "paging": false

        });
    });
</script> -->