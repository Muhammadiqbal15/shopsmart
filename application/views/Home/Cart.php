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
            <li class="nav-item active">
                <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
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
            <?php if (!$this->session->userdata('role_id') !== 1) : ?>
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

<form class="form-inline mt-5 mb-5 justify-content-center" method="POST">
    <div class="input-group input-group-lg col-lg-8 mt-5">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
        <button class="btn btn-outline-primary btn-sm my-2 my-sm-0 mt-1 col-lg-2" type=" submit"><i class="fas fa-search"></i></button>
    </div>
</form>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <img src="<?= base_url() ?>assets/img/<?= $barang->gambar; ?>" alt="" class="img-fluid shadow">
            <h4 class="mt-3"><?= $barang->nama_barang; ?></h4>
            <h4 class="mt-3">Rp.<?= $barang->harga_barang; ?></h4>
            <a href="<?= base_url() ?>Home/index" class="btn btn-success mt-3 btn-block shadow">Home</a>
        </div>
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header">
                    Pemesanan
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>Home/insertcart/<?= $barang->id_barang; ?>" method="post" id="formbeli">
                        <h5>Barang : </h5>
                        <div class="form-row">
                            <div class="col">
                                <label for="nmbrg">Nama Barang:</label>
                                <input type="text" class="form-control" id="nmbrg" name="nmbrg" value="<?= $barang->nama_barang; ?>">
                            </div>
                            <div class="col">
                                <label for="hrgbrg">Harga Barang:</label>
                                <input type="text" class="form-control" id="hrgbrg" name="hrgbrg" value="<?= $barang->harga_barang; ?>">
                            </div>
                        </div>
                        <h5 class="mt-2">Pembeli : </h5>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="nomor">No.Telp / HP</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" autocomplete="off">
                        </div>
                        <small class="text-danger">
                            <?= form_error('nomor'); ?>
                        </small>
                        <div class="form-row">
                            <div class="col">
                                <label for="provinsi">Provinsi</label>
                                <select class="form-control" id="provinsi" name="Provinsi">
                                    <option value="">--Pilih Proivinsi--</option>
                                    <?php foreach ($provinsi as $row) : ?>
                                        <option value="<?php echo $row->id_provinsi; ?>"><?php echo $row->nama_provinsi; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="kota">Kota/Kabupaten</label>
                                <select class="form-control" id="kota" name="Kota">
                                    <option value="">--Pilih Kota/Kabupaten</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="kota">Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="kecamatan">
                                    <option value="">--Pilih Kecamatan--</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="kota">Kelurahan/Desa</label>
                                <select class="form-control" id="kelurahan" name="kelurahan">
                                    <option value="">--Pilih Kelurahan/Desa</option>
                                </select>
                            </div>
                        </div>
                        <script src="<?= base_url(); ?>assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>

                        <script type="text/javascript">
                            $(document).ready(function() {

                                $('#provinsi').change(function() {
                                    var id = $(this).val();
                                    $.ajax({
                                        url: "<?php echo site_url('Home/get_kota_list'); ?>",
                                        method: "POST",
                                        data: {
                                            id: id
                                        },
                                        async: true,
                                        dataType: 'json',

                                        success: function(data) {
                                            console.log(data);
                                            var html = '';
                                            var i;
                                            for (i = 0; i < data.length; i++) {
                                                html += '<option value=' + data[i].id_kota + '>' + data[i].nama_kota + '</option>';
                                            }
                                            $('#kota').html(html);

                                        }
                                    });
                                    return false;
                                });

                                $('#kota').change(function() {
                                    var id = $(this).val();
                                    $.ajax({
                                        url: "<?php echo site_url('Home/get_kecamatan_list'); ?>",
                                        method: "POST",
                                        data: {
                                            id: id
                                        },
                                        async: true,
                                        dataType: 'json',

                                        success: function(data) {
                                            console.log(data);
                                            var html = '';
                                            var i;
                                            for (i = 0; i < data.length; i++) {
                                                html += '<option value=' + data[i].id_kecamatan + '>' + data[i].nama_kecamatan + '</option>';
                                            }
                                            $('#kecamatan').html(html);

                                        }
                                    });
                                    return false;
                                });

                                $('#kecamatan').change(function() {
                                    var id = $(this).val();
                                    $.ajax({
                                        url: "<?php echo site_url('Home/get_kelurahan_list'); ?>",
                                        method: "POST",
                                        data: {
                                            id: id
                                        },
                                        async: true,
                                        dataType: 'json',

                                        success: function(data) {
                                            console.log(data);
                                            var html = '';
                                            var i;
                                            for (i = 0; i < data.length; i++) {
                                                html += '<option value=' + data[i].id_kelurahan + '>' + data[i].nama_kelurahan + '</option>';
                                            }
                                            $('#kelurahan').html(html);

                                        }
                                    });
                                    return false;
                                });

                            });
                        </script>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <small class="text-danger">
                            <?= form_error('alamat'); ?>
                        </small>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Barang</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off">
                        </div>
                        <small class="text-danger">
                            <?= form_error('jumlah'); ?>
                        </small>
                        <div class="form-group">
                            <label for="kirim">Pengiriman</label>
                            <select class="form-control" id="kirim" name="pengiriman">
                                <option>J&T</option>
                                <option>JNE</option>
                                <option>Ninja Express</option>
                            </select>
                        </div>
                        <input type="hidden" name="jumlahpembeli" value="1">
                        <button type="submit" value="submit" name="submit" class="btn btn-primary mt-3 tombol-beli">Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>