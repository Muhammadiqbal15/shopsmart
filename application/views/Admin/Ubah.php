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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Ubah Data Barang</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <h5 class="card-header bg-dark">Ubah Data Barang</h5>
                <div class="card-body">
                  <?php echo form_open_multipart('Admin/updatedata/') ?>
                  <!-- file lama -->
                  <input type="hidden" name="filelama" value="<?= $barang->gambar ?>">
                  <!-- ID -->
                  <input type="hidden" name="id_barang" value="<?= $barang->id_barang ?>">
                  <div class="form-group">
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" class="form-control" id="namabarang" name="namabrg" value="<?= $barang->nama_barang ?>" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="hrgbarang">Harga Barang</label>
                    <input type="text" class="form-control" id="hrgbarang" name="hargabrg" value="<?= $barang->harga_barang ?>" autocomplete="off">
                  </div>
                  <img src="<?= base_url() ?>assets/img/<?= $barang->gambar ?>" alt="" class="img-fluid">
                  <div class="form-group">
                    <label for="gambar">Foto</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                  </div>
                  <div class="form-group">
                    <label for="stok">Jumlah Barang</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="<?= $barang->jumlah ?>" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="jenis">Satuan Barang</label>
                    <select class="form-control" id="jenis" name="uom">
                      <option>Unit</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis Barang</label>
                    <select class="form-control" id="jenis" name="jenis">
                      <?php foreach ($jenisbarang as $jb) : ?>
                        <?php if ($jb ==  $barang->jenis_barang) : ?>
                          <option value="<?= $jb; ?>" selected><?= $jb; ?></option>
                        <?php else : ?>
                          <option value="<?= $jb; ?>"><?= $jb; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Keterangan">Keterangan Barang</label>
                    <select class="form-control" id="keterangan" name="ket">
                      <?php foreach ($keterangan as $ket) : ?>
                        <?php if ($ket ==  $barang->ket_barang) : ?>
                          <option value="<?= $ket; ?>" selected><?= $ket; ?></option>
                        <?php else : ?>
                          <option value="<?= $ket; ?>"><?= $ket; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <button class="btn btn-primary float-right mt-2" type="submit" name="ubah">Ubah</button>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


</body>