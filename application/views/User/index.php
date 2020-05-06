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
                  <ul class="list-group-flush">
                    <li class="list-group-item">
                      <h5><i class="fas fa-money-check-alt"></i> <?= $user['ebanking']; ?></h5>
                    </li>
                    <i class=></i>
                    <li class="list-group-item">
                      <h5><i class="fas fa-money-bill-wave-alt"></i> <?= $user['emoney']; ?></h5>
                    </li>
                  </ul>
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
            <div class="card">
              <div class="card-header">
                Menerima Metode Pembayaran
              </div>
              <div class="card-body">
                <form action="<?= base_url(); ?>User/methodpmbyrn" method="POST">
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
                    <div class="col">
                      <br>
                      <button class="btn btn-primary mt-2" type="submit" name="bayar">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
</div>