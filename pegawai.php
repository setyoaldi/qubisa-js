<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php">Kelompok 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pegawai.php">Pilih Pegawai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET"
            class="form form-floating flex justify-content-center">
            <h2>Pilih Pegawai:</h2>
            <div class="d-flex">
                <div class="p-2 flex-grow-1">

                    <select class="form-select" name="nama">
                        <option selected>Pilih Nama Pegawai</option>
                        <?php
				include "database.php";
				//query menampilkan nip pegawai ke dalam combobox
				$query	=mysqli_query($connect, "SELECT * FROM karyawan ORDER BY id");
				while ($data = mysqli_fetch_array($query)) {
				?>
                        <option value="<?=$data['nama'];?>"><?php echo $data['nama'];?></option>
                        <?php
				}
				?>
                    </select>
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Pilih Pegawai</button>
                    <button type="button" class="btn btn-danger "><a class="text-decoration-none text-white"
                            href=" ./index.php">Refresh</a></button>
                </div>
            </div>
        </form>
    </div>

    <?php
		if (isset($_GET['nama'])) {
			$id_peg=$_GET['nama'];

			//menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
			$tamPeg=mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$id_peg'");
			$tpeg = mysqli_fetch_array($tamPeg);
		
		?>
    <div class="container">
        <H2 class="mt-5 ">Data Pegawai</H2>
        <form action="update.php" method="POST" class="form">
            <table class="table">
                <tr>
                    <td><label for="" class="col-form-label">ID</label></td>
                    <td><input class="form-control" type="text" name="id" value="<?php echo $tpeg['id']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Nama</label></td>
                    <td><input class="form-control" type="text" name="nama" value="<?php echo $tpeg['nama']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Alamat</label></td>
                    <td><input class="form-control" type="text" name="alamat" value="<?php echo $tpeg['alamat']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Jabatan</label></td>
                    <td><input class="form-control" type="text" name="jabatan"
                            value="<?php echo $tpeg['jabatan']; ?>" /></td>
                </tr>
                <tr>
                    <td id="gaji"><label for="" class="col-form-label">Gaji perbulan</label></td>
                    <td><input class="form-control" type="text" name="gaji" value="<?php echo $tpeg['gaji']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Cuti</label></td>
                    <td><input class="form-control" type="text" name="cuti" value="<?php echo $tpeg['cuti']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Absen</label></td>
                    <td><input class="form-control" type="text" name="absen" value="<?php echo $tpeg['absen']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Sakit</label></td>
                    <td><input class="form-control" type="text" name="sakit" value="<?php echo $tpeg['sakit']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Aksi</label></td>
                    <td>
                        <button type="submit" class="btn btn-success mx-2">Simpan Perubahan</button>
                        <button type="submit" class="btn btn-danger mx-2">Hitung Gaji</button>
                        <button type="submit" class="btn btn-warning text-white mx-2">Hitung pph21</button>

                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
		}
		?>
</body>

</html>