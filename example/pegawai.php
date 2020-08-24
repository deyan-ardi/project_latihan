<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>UD Sumber Hasil - Data Pegawai</title>
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
        <h1>Data Pegawai</h1>
        <hr>
        <!-- Buat Tombol Tambah Data -->
        <a href="tambah_pegawai.php" class="tambah">Tambah Data</a>
        <table width="100%" border="1" cellspacing="0" cellpadding="5px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Asal</th>
                    <th>Diinput Tanggal</th>
                    <th>Fitur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no">1</td>
                    <td>Vina Velina</td>
                    <td>Jalan Hasanudin</td>
                    <td>2020-08-24 21:52:23</td>
                    <td>
                        <div class="tombol">
                            <a href="#" class="hapus">Hapus</a>
                            <a href="#" class="ubah">Ubah</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>