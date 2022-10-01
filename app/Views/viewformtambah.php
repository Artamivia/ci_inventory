<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('Barang/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('Barang/simpandata') ?>

        <table>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="text" name="kode" autofocus>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama" autofocus>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <input type="text" name="kategori" autofocus>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <input type="text" name="satuan" autofocus>
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>
                    <input type="number" name="stok" autofocus>
                </td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>
                    <input type="text" name="merk" autofocus>
                </td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td>
                    <input type="text" name="spesifikasi" autofocus>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan Data">
                </td>
            </tr>
        </table>

        <?= form_close(); ?>
    </p>
    
</body>
</html>