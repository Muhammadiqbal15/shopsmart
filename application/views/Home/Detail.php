<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= base_url() ?>assets/img/<?= $barang->gambar ?>" alt="" class="img-fluid mt-5">
        </div>
        <div class="col-lg-6 mt-5">
            <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Penjual: <?= $barang->nama ?></h4>
            <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Nama Barang : <?= $barang->nama_barang ?></h4>
            <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Harga Barang : Rp<?= number_format($barang->harga_barang, 0, ',', '.'); ?></h4>
            <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Jenis Barang : <?= $barang->jenis_barang ?></h4>
            <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Stok Barang : <?= $barang->stoksisa ?> <?= $barang->UOM  ?></h4>
            <a href="<?= base_url() ?>Home/index" class="btn btn-success mb-2">Kembali</a>
            <a href="<?= base_url() ?>User/Toko/<?= $barang->id ?>" class="btn btn-warning mb-2"><i class="fas fa-store"></i> LihatToko</a>
            <a href="<?= base_url() ?>User/keranjang/<?= $barang->id_barang; ?>" class="btn btn-info mb-2"><i class="fas fa-shopping-cart"></i> Tambah Ke Keranjang</a>
        </div>
    </div>
</div>