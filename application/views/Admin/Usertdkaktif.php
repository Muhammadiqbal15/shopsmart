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
          <a href="<?= base_url() ?>Home/index" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
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
        <div class="col-lg-4 col-sm-6 col-4">
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
        <div class="col-lg-4 col-sm-6 col-4">
          <div class="info-box">
            <span class="info-box-icon bg-success">
              <i class="fas fa-users"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">User Aktif</span>
              <span class="info-box-number"><?= $useraktif; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-4">
          <div class="info-box">
            <span class="info-box-icon bg-danger">
              <i class="fas fa-users"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">User Tidak Aktif</span>
              <span class="info-box-number"><?= $usertdkaktif; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
      </div>

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data User Tidak Aktif</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <a href="<?= base_url() ?>Admin/Pdfusertdkaktif" class="btn btn-danger ml-3 mb-2"><i class="fas fa-file"></i> Export PDF</a>
      <a href="<?= base_url() ?>Admin/excel" class="btn btn-success mb-2"><i class="fas fa-file"></i> Export EXCEL</a>
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
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Aktif</th>
                            <th>Notelp</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i=1; ?>
                          <?php foreach ($user as $usr) : ?>
                            <tr>
                              <td><?= $i; ?></td>
                              <td><?= $usr['id']; ?></td>
                              <td><?= $usr['nama']; ?></td>
                              <td><?= $usr['email']; ?></td>
                              <td><img src="<?= base_url(); ?>assets/img/<?= $usr['foto']; ?>" alt="" width="70" height="70"></td>
                              <td>
                                <a href="" id="almt" class="btn btn-info btn-sm" data-toggle="modal" data-target="#alamat" data-provinsi="<?= $usr['provinsi']; ?>" data-kota="<?= $usr['kota']; ?>" data-kecamatan="<?= $usr['kecamatan']; ?>" data-kelurahan="<?= $usr['kelurahan']; ?>" data-alamatlengkap="<?= $usr['alamat']; ?>"><i class="fas fa-eye"></i> Detail
                                </a>
                              </td>
                              <td><?= $usr['is_active']; ?></td>
                              <td><?= $usr['notelp']; ?></td>
                              <td>
                                <a href="<?= base_url(); ?>Admin/tampiluser/<?= $usr['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Lihat Profil User</a>
                              </td>
                            </tr>
                            <?php  $i++; ?>
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
</body>