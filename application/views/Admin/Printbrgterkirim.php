<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body>

    <center><h3>Laporan Data Barang Sudah Terkirim</h3></center>
    <br><br><br>
    <table border="1" cellspacing="-1" cellpadding="1">

        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th>Total Harga</th>
            <th>Pengiriman</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Penerima</th>
            <th>No.Telp Penerima</th>
            <th>Alamat Lengkap</th>
            <th>Provinsi</th>
            <th>Kota/Kabupaten</th>
            <th>Kecamatan</th>
            <th>Kelurahan/Desa</th>
            <th>Pengirim</th>
        </tr>



        <?php $i=1; ?>
        <?php foreach ($brg as $bt) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $bt['id']; ?></td>
            <td><?= $bt['nama_brg']; ?></td>
            <td><?= $bt['harga_brg']; ?></td>
            <td><?= $bt['jumlah_brg']; ?></td>
            <td><?= $bt['tot_hrg']; ?></td>
            <td><?= $bt['pengiriman']; ?></td>
            <td><?= $bt['pembayaran']; ?></td>
            <td><?= $bt['status_brg']; ?></td>
            <td><?= $bt['nama_pb']; ?></td>
            <td><?= $bt['notelp']; ?></td>
            <td><?= $bt['alamat']; ?></td>
            <td><?= $bt['provinsi']; ?></td>
            <td><?= $bt['kota']; ?></td>
            <td><?= $bt['kecamatan']; ?></td>
            <td><?= $bt['kelurahan']; ?></td>
            <td><?= $bt['nama']; ?></td>
        </tr>
        <?php  $i++; ?>
        <?php endforeach; ?>

    </table>

    <script>
        window.print();
    </script>
</body></html>