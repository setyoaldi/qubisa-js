<?php 
 
include 'database.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];
$jhk = $_POST['jhk'];
$query = "UPDATE karyawan SET id='$id', nama='$nama', alamat='$alamat', jabatan='$jabatan', gaji='$gaji', jhk='$jhk' WHERE id='$id'";

mysqli_query($connect, $query);
echo '<script type="text/javascript">';
echo 'alert("data tersimpan!")';
echo '</script>';
header("location:index.php?pesan=update");
?>