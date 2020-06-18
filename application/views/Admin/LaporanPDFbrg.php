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
            <th>Id</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Jenis Barang</th>
            <th>Stok Awal</th>
            <th>Stok Sisa</th>
            <th>Satuan</th>
            <th>Keterangan</th>
            <th>Pembayaran E-Banking</th>
            <th>Pembayaran E-Money</th>
            <th>Penjual</th>
        </tr>
        <?php
        $i = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg['id_barang']; ?></td>
                <td><?= $brg['nama_barang']; ?></td>
                <td><?= number_format($brg['harga_barang'], 0, ',', '.'); ?></td>
                <td><?= $brg['gambar'];; ?></td>
                <td><?= $brg['jenis_barang']; ?></td>
                <td><?= $brg['stokawal']; ?></td>
                <td><?= $brg['stoksisa']; ?></td>
                <td><?= $brg['UOM']; ?></td>
                <td><?= $brg['ket_barang']; ?></td>
                <td><?= $brg['ebanking']; ?></td>
                <td><?= $brg['emoney']; ?></td>
                <td><?= $brg['nama'];   ?></td>
            </tr>
            <?php $i++;  ?>
        <?php endforeach; ?>
       
    </table>
</body></html>