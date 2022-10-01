<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
    <h2>Edit Data Barang</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('Barang/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('Barang/updatedata') ?>

        <table>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="text" name="kode" readonLy value=<?= $kode;?>>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama" readonLy value=<?= $nama;?>>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <input type="text" name="kategori" value=<?= $kategori;?>>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <input type="text" name="satuan" value=<?= $satuan ;?>>
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>
                    <input type="number" name="stok" value=<?= $stok ;?>>
                </td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>
                    <input type="text" name="merk" value=<?= $merk;?>>
                </td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td>
                    <input type="text" name="spesifikasi" value=<?= $spesifikasi ;?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>

        <?= form_close(); ?>
    </p>
    
</body>
</html>