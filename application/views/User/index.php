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
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
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
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
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
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
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
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
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