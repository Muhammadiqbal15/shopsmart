<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body>

    <center><h3>Laporan Data Total User</h3></center>
    <br><br><br>
    <table border="1" cellspacing="-1" cellpadding="10">

        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Provins</th>
            <th>Kota/Kabupaten</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Alamat Lengkap</th>
            <th>Aktif</th>
            <th>Notelp</th>
            <th>Tanggal Dibuat Akun</th>
        </tr>



        <?php
        $i = 1;
        foreach ($user as $usr) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $usr['id']; ?></td>
                <td><?= $usr['nama']; ?></td>
                <td><?= $usr['email']; ?></td>
                <td><?= $usr['foto']; ?></td>
                <td><?= $usr['provinsi']; ?></td>
                <td><?= $usr['kota']; ?></td>
                <td><?= $usr['kecamatan']; ?></td>
                <td><?= $usr['kelurahan']; ?></td>
                <td><?= $usr['alamat']; ?></td>
                <td><?= $usr['is_active']; ?></td>
                <td><?= $usr['notelp']; ?></td>
                <td><?= date("d-M-Y ",$usr['date_created']); ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body></html>