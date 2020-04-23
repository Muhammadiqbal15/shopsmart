<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url(); ?>Home/index">E-Toko</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Laptop">Laptop<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Mouse">Mouse<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Keyboard">Keyboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Mousepad">Mousepad<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Smartphone">Smartphone<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>Home/Headset">Headset&Earphone<span class="sr-only">(current)</span></a>
            </li>
            <li>
                <form class="form-inline mt-1" method="POST">
                    <input class="form-control-sm" mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 ml-3 mt-1" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </li>
        </ul>
        <?php if ($this->session->userdata('status') != "login") : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>Auth/index">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>Auth/Registrasi">Registrasi<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        <?php else : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>User/index"><i class="far fa-user"></i> <?= $user['nama']; ?><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        <?php endif; ?>

    </div>
</nav>
<br>
<?php if (empty($barang)) : ?>
    <div class="alert alert-danger" role="alert">
        Barang Tidak Ditemukan atau Tidak Ada
    </div>
<?php endif; ?>
<br>
<div class="container">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-lg-4 col-md-4  mb-4">
                <div class="card h-100">
                    <img class="card-img-top img-responsive" src="<?= base_url() ?>assets/img/<?= $brg->gambar; ?>" alt="" img style="height: 300px;">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?= $brg->nama_barang ?>
                        </h4>
                        <h5>Rp.<?= $brg->harga_barang; ?></h5>
                        <a href="<?= base_url() ?>Home/cart/<?= $brg->id_barang ?>" id="pesan" class="btn btn-primary mt-3 beli_barang">
                            Pesan
                        </a>
                        <a href="<?= base_url() ?>Home/detaillaptop/<?= $brg->id_barang ?>" class="btn btn-success mt-3">Detail</a>
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