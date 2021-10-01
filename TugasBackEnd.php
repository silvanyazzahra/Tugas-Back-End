<?php
// Tugas Pertemuan Pertama Backend
// Nama
$nama_depan = "Silvany";
$nama_tengah = "Azzahra";
$nama_belakang = "Putri";
$nama_lengkap = $nama_depan . " " . $nama_tengah . " " . $nama_belakang;

// No Telepon
$no_telp = "+628999035057";

// Usia
$usia = 18;

// Tempat, Tanggal Lahir
$kota_lahir = "Bekasi";
$hari_lahir = "10";
$bulan_lahir = "Juni";
$tahun_lahir = 2003;
$tempat_tanggal_lahir = $kota_lahir . ", " . $hari_lahir . " " . $bulan_lahir . " " . $tahun_lahir;
$tahun_kabisat = $tahun_lahir % 4; // Tahun kabisat adalah tahun yang habis dibagi 4

// Status
$status_menikah = false;

// Alamat
$jalan = "Jl. Raya Bantar Gebang setu";
$kelurahan = "Padurenan";
$kecamatan = "Mustika Jaya";
$kota = "Bekasi";
$kode_pos = "17145";
$alamat_lengkap = $jalan . ", " . $kelurahan . ", " . $kecamatan . ", " . $kota . ", " . $kode_pos;
// Target IPK
$target_ipk = 3.8;
?>

<!DOCTYPE html>
<html>
    <title>Tugas Biodata</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>
        <h1>Biodata Saya</h1>
        <p>Nama Lengkap = <?php echo $nama_lengkap ?></p>
        <p>No. Telepon = <?php echo $no_telp ?></p>
        <p>Usia = <?php echo $usia ?> tahun</p>
        <p>Tempat Tanggal Lahir = <?php echo $tempat_tanggal_lahir?>
        <?php echo var_export($tahun_kabisat == 0)?></p>
        <p>Status Menikah = <?php var_export($status_menikah)?></p>
        <p>Alamat = <?php echo $alamat_lengkap?></p>
        <p>Target IPK = <?php echo $target_ipk?></p>
    </body>
</html>