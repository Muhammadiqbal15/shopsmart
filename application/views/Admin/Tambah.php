<nav class="main-header navbar navbar-expand navbar-white navbar-light">
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

<aside class="main-sidebar sidebar-dark-primary elevation-4">
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

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>Admin/index" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>Admin/Tambah" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>TambahData</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Data Pembeli</p>
                    </a>
                </li>
        </nav>
    </div>
</aside>

<div class="container float-right">
    <div class="row mt-5 ml-5">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-dark">Tambah Data Barang</h5>
                <div class="card-body">
                    <?php echo form_open_multipart('Admin/insertdata'); ?>
                    <div class="form-group">
                        <label for="namabarang">Nama Barang</label>
                        <input type="text" class="form-control" id="namabarang" name="namabrg" autocomplete="off">
                    </div>
                    <small class="text-danger">
                        <?= form_error('namabrg'); ?>
                    </small>
                    <div class="form-group">
                        <label for="hrgbarang">Harga Barang</label>
                        <input type="text" class="form-control" id="hrgbarang" name="hargabrg" autocomplete="off">
                    </div>
                    <small class="text-danger">
                        <?= form_error('hargabrg'); ?>
                    </small>
                    <div class="form-group">
                        <label for="gambar">Foto</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah" name="jml" autocomplete="off">
                    </div>
                    <small class="text-danger">
                        <?= form_error('jml'); ?>
                    </small>
                    <div class="form-group">
                        <label for="jenis">Satuan Barang</label>
                        <select class="form-control" id="jenis" name="uom">
                            <option>Unit</option>
                        </select>
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
                    <button class="btn btn-primary float-right mt-2" type="submit" name="tambah">Tambah</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>