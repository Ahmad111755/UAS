<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("https://jsonplaceholder.typicode.com/posts");
$data = json_decode($data, TRUE); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>STTI API</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="tampil.php">Produk</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="content">
                <p>DATA PRODUK</p> <a href="tambah.php">Tambah Data</a>
                <table style="width:100%">
                    <tr>
                        <td>Nama</td>
                        <td>Tipe Produk</td>
                        <td>Aksi</td>
                    </tr>
                    <?php foreach ($data as $data) { ?>
                        <tr>
                            <td>
                                <?= $data["userId"] ?>
                            </td>
                            <td>
                                <?= $data["id"] ?>
                            </td>
                            <td>
                                <?= $data["title"] ?>
                            </td>
                            <td>
                                <?= $data["body"] ?>
                            </td>
                            <td colspan="2"> <a href="edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../api/api_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p> Sekolah Tinggi Teknologi Indonesia</p>
        </div>
    </div>
</body>

</html>

Menambah Data
Untuk menambah data buatlah sebuah file tambah.php pada folder readapi/tambah.php berikut adalah coding untuk menambahkan data produk

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>STTI API</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="../readapi/tampil.php">Produk</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="content">
                <p>Tambah Produk</p> <a href="../readapi/tampil.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>TAMBAH PRODUK</h1>
                    <p>form ini digunakan untuk tambah data produk</p>
                    <form action="../api/api_tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tipe Produk</label>
                            <input type="text" name="tipe_produk" id="tipe_produk" placeholder="Tipe Produk" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" id="harga" placeholder="Harga" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" id="stok" placeholder="Stok" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p> Sekolah Tinggi Teknologi Indonesia</p>
        </div>
    </div>
</body>

</html>