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
                        <a class="nav-link mt-2" href="<?= base_url() ?>User/index">Keranjang Belanja <?= $keranjang; ?> items</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>User/index"><?= $user['nama']; ?>
                            <img src="<?= base_url(); ?>/assets/img/<?= $user['foto']; ?>" alt="" width="40" height="40" class="rounded-circle ml-1 "><span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>Admin/index"><i class="far fa-user"></i> <?= $user['nama']; ?><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</nav>


<form class="form-inline mt-1 mb-5 justify-content-center" method="POST">
    <div class="input-group input-group-lg col-lg-8 mt-5">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
        <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 mt-1 col-lg-2" type=" submit"><i class="fas fa-search"></i></button>
    </div>
</form>

<?php if (empty($barang)) : ?>
    <div class="alert alert-danger" role="alert">
        Barang Tidak Ditemukan atau Tidak Ada
    </div>
<?php endif; ?>
<br>
<div class="container">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-lg-4 mt-3 mb-3">
                <div class="card h-100">
                    <img class="card-img-top img-responsive" src="<?= base_url() ?>assets/img/<?= $brg->gambar ?>" alt="" width="300px" height="300px">
                    <div class="card-body">
                        <h4><?= $brg->nama_barang ?></h4>
                        <h5>Rp<?= number_format($brg->harga_barang, 0, ',', '.'); ?></h5>
                        <a href="<?= base_url() ?>Home/detailsmartphone/<?= $brg->id_barang ?>" class="btn btn-success mt-3">Detail</a>
                        <a href="<?= base_url() ?>User/keranjang/<?= $brg->id_barang; ?>" class="btn btn-danger mt-3">Keranjang</a>
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