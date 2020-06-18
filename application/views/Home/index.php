<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">E-Toko</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Laptop">Laptop</a>
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Mouse">Mouse</a>
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Keyboard">Keyboard</a>
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Mousepad">MousePad</a>
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Smartphone">SmartPhone</a>
                    <a class="dropdown-item" href="<?= base_url() ?>Home/Headset">Headset&Earphone</a>

                </div>
            </li>
        </ul>
        <?php if (!$this->session->userdata('email')) : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>Auth/index">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>Auth/Registrasi">Registrasi<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        <?php else : ?>
            <?php $role = $this->session->userdata('role_id');  ?>
            <?php if ($role > 1) : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <?php $keranjang = $this->cart->total_items(); ?>
                        <a class="nav-link " href="<?= base_url() ?>User/keranjanguser">Keranjang Belanja <?= $keranjang; ?> items</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>User/index"><?= $user['nama']; ?>
                            <img src="<?= base_url(); ?>/assets/img/<?= $user['foto']; ?>" alt="" width="30" height="30" class="rounded-circle ml-1 img-fluid "><span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>Admin/index"><?= $user['nama']; ?><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</nav>
<?php if (empty($Barang)) : ?>
    <div class="alert alert-danger" role="alert">
        Barang Tidak Ditemukan atau Tidak Ada
    </div>
<?php endif; ?>


<?php foreach ($gambar as $gb) : ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="min-height: 300px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>assets/img/<?= $gb['gb_1']; ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>assets/img/<?= $gb['gb_2']; ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>assets/img/<?= $gb['gb_3']; ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endforeach; ?>

<form class="form-inline mt-1 mb-5 justify-content-center" method="POST">
    <div class="input-group input-group-lg col-lg-8 mt-5">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
        <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 mt-1 col-lg-2" type=" submit"><i class="fas fa-search"></i></button>
    </div>
</form>

<div class="login" data-login="<?= $this->session->flashdata('login'); ?>"></div>
<div class="logout" data-logout="<?= $this->session->flashdata('logout'); ?>"></div>

<div class="container">
    <div class="row">
        <?php foreach ($Barang as $brg) : ?>
            <div class="col-lg-4 col-md-4  mb-4">
                <div class="card h-100">
                    <img class="card-img-top img-fluid" src="<?= base_url() ?>assets/img/<?= $brg['gambar']; ?>" alt="" width="300px" height="300px">
                    <div class="card-body">
                        <h4>
                            <?= $brg['nama_barang']; ?>
                        </h4>
                        <h5>Rp<?= number_format($brg['harga_barang'], 0, ',', '.'); ?></h5>
                        <a href="<?= base_url() ?>Home/detail/<?= $brg['id_barang']; ?>" class="btn btn-success mt-3"><i class="fas fa-eye"></i> Detail</a>
                        <a href="<?= base_url() ?>User/keranjang/<?= $brg['id_barang']; ?>" class="btn btn-info mt-3"><i class="fas fa-shopping-cart"></i> Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?= $this->pagination->create_links(); ?>
</div>
<footer class="py-5 col-lg-12 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
</footer>

<script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery-3.4.1.min.js"></script>