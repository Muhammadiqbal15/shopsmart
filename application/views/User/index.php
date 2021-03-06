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


    <div class="edit" data-edit="<?= $this->session->flashdata('edit'); ?>"></div>
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
              <h1 class="m-0 text-dark">My Profile</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-10 connectedSortable">
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?= base_url(); ?>assets/img/<?= $user['foto']; ?>" class="card-img-top" alt="Foto Profile" class="img-fluid">
                    <a href="<?= base_url(); ?>User/editprofile/<?= $user['id']; ?>" class="btn btn-primary mt-3 mb-3 ml-2"><i class="fas fa-user-edit"></i> Edit Profile</a>
                    <a href="<?= base_url(); ?>User/ubahpassword" class="btn btn-primary"><i class="fas fa-key"></i> Ubah Password</a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">

                      <ul class="list-group-flush">
                        <li class="list-group-item">
                          <h5><i class="fas fa-user mr-3"></i><?= $user['nama']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="far fa-envelope mr-3"></i> <?= $user['email']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-phone mr-3"></i> <?= $user['notelp']; ?></h5>
                        </li>
                      </ul>
                      <ul class="list-group-flush">
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user['provinsi']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user['kota']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user['kecamatan']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user['kelurahan']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i><?= $user['alamat']; ?></h5>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </section>
    </div>
  </div>
<?php else : ?>
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


    <div class="edit" data-edit="<?= $this->session->flashdata('edit'); ?>"></div>
    <div class="pembayaran" data-pembayaran="<?= $this->session->flashdata('pembayaran'); ?>"></div>
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
              <h1 class="m-0 text-dark">Profile <?= $user1['nama']; ?></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-10 connectedSortable">
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?= base_url(); ?>assets/img/<?= $user1['foto']; ?>" class="card-img-top" alt="Foto Profile" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">

                      <ul class="list-group-flush">
                        <li class="list-group-item">
                          <h5><i class="fas fa-user mr-3"></i><?= $user1['nama']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="far fa-envelope mr-3"></i> <?= $user1['email']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-phone mr-3"></i> <?= $user1['notelp']; ?></h5>
                        </li>
                      </ul>
                      <ul class="list-group-flush">
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user1['provinsi']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user1['kota']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user1['kecamatan']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i> <?= $user1['kelurahan']; ?></h5>
                        </li>
                        <li class="list-group-item">
                          <h5><i class="fas fa-map-marker-alt mr-3"></i><?= $user1['alamat']; ?></h5>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="<?= base_url(); ?>Admin/index" class="btn btn-success">Kembali</a>
              </div>
          </div>
      </section>
    </div>
  </div>
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

<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery-3.4.1.min.js"></script>