<html>
<head>
<title>Belajar Sistem PHP</title>
<!--Memanggil File CSS-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1><center>Belajar Sistem PHP</center></h1>
</div>
 
<div class="sidebar-kiri">
<?php
include "menu.php"; //ini untuk memanggil file menu
?>
</div>
 
<div class="konten">
<?php
include "koneksi/koneksi.php"; //untuk koneksi mysql
switch ($_GET['modul']) {
    default:
    echo '<h1>Selamat Datang</h1>
    <p>Ini adalah contoh konten yang di dalam nya pada umumnya digunakan untuk menampilkan data dari database, konten gambar, tabel, dan lainnya</p>';
    break;
    case "barang": //barang adalah nama modul nya
    include "modul/barang.php";
    break;
    case "masuk":
    include "modul/masuk.php";
    break;
    case "keluar":
    include "modul/keluar.php";
    break;
    case "laporanbarangkeluar":
    include "modul/laporanbarangkeluar.php";
    break;
    case "laporanbarangmasuk":
    include "modul/laporanbarangmasuk.php";
    break;
}
?>
</div>
<?php
include "footer.php"; //ini untuk memanggil file footer
?> 
</body>
</html>
