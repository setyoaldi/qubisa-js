<?php 
 
include 'database.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
$cuti = $_POST['cuti'];
$absen = $_POST['absen'];
$sakit = $_POST['sakit'];
$query = "UPDATE karyawan SET id='$id', nama='$nama', alamat='$alamat', jabatan='$jabatan', gaji='$gaji', cuti='$cuti', absen='$absen', sakit='$sakit' WHERE id='$id'";

mysqli_query($connect, $query);
echo '<script type="text/javascript">';
echo 'alert("data tersimpan!")';
echo '</script>';
header("location:index.php?pesan=update");
?>