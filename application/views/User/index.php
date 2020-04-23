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
          <img src="<?= base_url(); ?>assets/foto/<?= $user['foto']; ?>" class="card-img-top" alt="Foto Profile" class="img-fluid">
        </div>
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
            <a href="<?= base_url(); ?>Admin/Pembeli" class="nav-link">
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
                  <img src="<?= base_url(); ?>assets/foto/<?= $user['foto']; ?>" class="card-img-top" alt="Foto Profile" class="img-fluid">
                  <a href="" class="btn btn-primary mt-3 mb-3 ml-2"><i class="fas fa-user-edit"></i> Edit Profile</a>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <ul class="list-group-flush">
                      <li class="list-group-item">
                        <h5><i class="fas fa-user mr-3"></i> <?= $user['nama']; ?></h5>
                      </li>
                      <li class="list-group-item">
                        <h5><i class="far fa-envelope mr-3"></i> <?= $user['email']; ?></h5>
                      </li>
                      <li class="list-group-item">
                        <h5><i class="far fa-calendar-alt mr-3"></i> <?= $user['tgllahir']; ?></h5>
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
          </section>
        </div>
      </div>
    </section>
  </div>
</div>