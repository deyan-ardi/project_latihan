<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_latihan";
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal :" . mysqli_connect_errno();
}
