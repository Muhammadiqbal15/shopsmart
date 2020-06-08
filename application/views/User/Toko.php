<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link" href="<?= base_url() ?>Home/index">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <?php foreach ($barang as $brng)  ?>
                <a class="nav-link" href="<?= base_url() ?>User/toko/<?= $brng->id; ?>">Toko <?= $brng->nama; ?><span class="sr-only">(current)</span></a>
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
                        <a class="nav-link" href="<?= base_url() ?>User/index"><i class="far fa-user"></i> <?= $user['nama']; ?><span class="sr-only">(current)</span></a>
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
<br><br>
<form class="form-inline mt-1 mb-5 justify-content-center" method="POST">
    <div class="input-group input-group-lg col-lg-8 mt-5">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
        <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 mt-1 col-lg-2" type=" submit"><i class="fas fa-search"></i></button>
    </div>
</form>
<div class="container overflow-auto" style="height: 400px;">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-lg-4 col-md-4 mt-5 mb-4">
                <div class="card h-100">
                    <img class="card-img-top img-fluid" src="<?= base_url() ?>assets/img/<?= $brg->gambar; ?>" alt="" width="300px" height="300px">
                    <div class="card-body">
                        <h4>
                            <?= $brg->nama_barang; ?>
                        </h4>
                        <h5>Rp.<?= $brg->harga_barang; ?></h5>
                        <a href="<?= base_url() ?>Home/detail/<?= $brg->id_barang; ?>" class="btn btn-success mt-3"><i class="fas fa-eye"></i> Detail</a>
                        <a href="<?= base_url() ?>User/keranjang/<?= $brg->id_barang; ?>" class="btn btn-info mt-3"><i class="fas fa-shopping-cart"></i> Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<footer class="py-5 col-lg-12 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
</footer>