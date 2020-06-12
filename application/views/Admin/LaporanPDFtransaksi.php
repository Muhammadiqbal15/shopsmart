<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body>
    <center><h3>Laporan Barang Yang Dijual User</h3></center>
    <br><br><br>
    <table border="1" cellspacing="-1" cellpadding="15">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Pembeli</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th>Total Harga</th>
            <th>Pengiriman</th>
            <th>Pembayaran</th>
            <th>Penjual</th>
        </tr>
        <?php
        $i = 1;
        foreach ($pembeli as $pembl) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $pembl['id_pembeli']; ?></td>
                <td><?= $pembl['nama_pb']; ?></td>
                <td><?= $pembl['nama_brg']; ?></td>
                <td><?= $pembl['harga_brg']; ?></td>
                <td><?= $pembl['jumlah_brg'] ?></td>
                <td><?= $pembl['tot_hrg']; ?></td>
                <td><?= $pembl['pengiriman']; ?></td>
                <td><?= $pembl['pembayaran'];   ?></td>
                <td><?= $pembl['nama']; ?></td>
            </tr>
            <?php $i++;  ?>
        <?php endforeach; ?>
    </table>
</body></html>