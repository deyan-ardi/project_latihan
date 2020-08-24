<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>UD Sumber Hasil - Tambah Data Pegawai</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="pegawai.php">Data Pegawai</a></li>
                <li><a href="barang.php">Data Barang</a></li>
                <li><a href="penjualan.php">Data Penjualan</a></li>
            </ul>
        </div>
    </nav>
    <main class="konten">
        <h1>Tambah Data Pegawai</h1>
        <hr>
        <div class="form">
            <form action="">
                <div class="form-group">
                    <label for="nama">Nama Pegawai</label> <br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Pegawai">
                </div>
                <div class="form-group">
                    <label for="asal">Asal Pegawai</label> <br>
                    <textarea name="asal" id="asal" cols="35" rows="10"></textarea>
                </div>
                <button type="submit" class="tambah">Tambah Data</button>
                <button type="reset" class="reset">Batal</button>
            </form>
        </div>
    </main>
</body>

</html>