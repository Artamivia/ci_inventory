<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Data Barang</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('Barang/tambah') ?>'">
            Tambah Data Barang
        </button>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Merk</th>
                <th>Spesifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($tampildata as $row) :
                $no++;
            ?>

                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row->kd_brg ?></td>
                    <td><?= $row->nm_brg ?></td>
                    <td><?= $row->kategori ?></td>
                    <td><?= $row->satuan ?></td>
                    <td><?= $row->stok ?></td>
                    <td><?= $row->merk ?></td>
                    <td><?= $row->spesifikasi ?></td>
                    <td>
                        <button type="button" onclick="hapus('<?= $row->kd_brg ?>')">
                            Hapus
                        </button>
                        <button type="button" onclick="window.location='<?php echo site_url('Barang/formedit/' .$row->kd_brg) ?>'">
                            Ubah
                        </button>
                    </td>
                </tr>

            <?php
            endforeach;
            ?>

        </tbody>
    </table>
    <script>
        function hapus(kode) {
            pesan = confirm('Yakin ingin hapus data?');

            if (pesan) {
                window.location.href = ("<?= site_url('Barang/hapus/') ?>") + kd_brg
            } else return false;
        }
    </script>
</body>

</html>