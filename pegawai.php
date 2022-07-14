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
                    <td><label for="" class="col-form-label">Gaji perbulan</label></td>
                    <td><input class="form-control" type="text"  id="gaji1" name="gaji" value="<?php echo $tpeg['gaji']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Cuti</label></td>
                    <td><input class="form-control" type="text" name="cuti" value="<?php echo $tpeg['cuti']; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Absen</label></td>
                    <td><input class="form-control" type="text" id="absen1" name="absen" value="<?php echo $tpeg['absen']; ?>" />
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
                        <button type="submit" class="btn btn-success mx-2" id="simpan">Simpan Perubahan</button>
                        <button type="button" class="btn btn-danger mx-2" id="gaji" onclick="gajiku()">Hitung Gaji</button>
                        <button type="button" class="btn btn-warning text-white mx-2" id="pph21" onclick="pph21f()">Hitung pph21</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="container">
        <H2 class="mt-5 ">Perhitungan Gaji(Dikurangi Absen)</H2>
        <form class="form">
            <table class="table">
                <tr>
                    <td><label for="" class="col-form-label">Jumlah Absen :</label></td>
                    <td><label for="" class="col-form-label" id="jmlAbsen"></label></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Gaji</label></td>
                    <td><label for="" class="col-form-label" id="jmlGaji"></label></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Gaji(Dikurangi Absen)</label></td>
                    <td><label for="" class="col-form-label" id="jmlGajiAbsen"></label></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="container">
        <H2 class="mt-5 ">Perhitungan PPH21</H2>
        <form action="update.php" method="POST" class="form">
            <table class="table">
                <tr>
                    <td><label for="" class="col-form-label">Pajak PPH21 Perbulan</label></td>
                    <td><label for="" class="col-form-label" id="pph21bulan"></label></td>
                </tr>
                <tr>
                    <td><label for="" class="col-form-label">Pajak PPH21 Pertahun</label></td>
                    <td><label for="" class="col-form-label" id="pph21tahun"></label></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
		}
		?>

<script type="text/javascript">
        function gajiku(){
            var absen = document.getElementById("absen1").value;
            var gaji = document.getElementById("gaji1").value;
            var gajiabsen = ((20 - absen) / 20) * gaji;
            document.getElementById("jmlAbsen").innerHTML=absen;
            document.getElementById("jmlGaji").innerHTML=gaji;
            document.getElementById("jmlGajiAbsen").innerHTML=gajiabsen;
        }
        function pph21f(){
            var gajisetahun = document.getElementById("gaji1").value * 12;
            const ptkp = 54000000;
            const pkp5 = 60000000;
            const pkp10 = 100000000;
            const pkp15 = 200000000;
            const pkp20 = 500000000;
            function pajak5(){
                if(gajisetahun > pkp5){
                    return Math.abs((ptkp - pkp5) * 5 / 100);
                }
                return Math.abs((gajisetahun - ptkp) * 5 / 100);
            }
            function pajak10(){
                if(gajisetahun > pkp10){
                    return Math.abs((pkp5 - pkp10) * 10 / 100);
                }
                return Math.abs((gajisetahun - pkp10) * 10 / 100);
            }
            function pajak15(){
                if(gajisetahun > pkp15){
                    return Math.abs((pkp10 - pkp15) * 15 / 100);
                }
                return Math.abs((gajisetahun - pkp15) * 15 / 100);
            }
            function pajak20(){
                if(gajisetahun > pkp20){
                    return Math.abs((pkp15 - pkp20) * 20 / 100);
                }
                return Math.abs((gajisetahun - pkp20) * 20 / 100);
            }
            function pajak25(){
                return Math.abs((gajisetahun - pkp20) * 25 / 100);
            }
            let pajak = 0;
                if(gajisetahun > ptkp){
                    Math.abs(pajak += pajak5(gajisetahun));
                    if(gajisetahun > pkp5){
                        Math.abs(pajak += pajak10(gajisetahun));
                        if(gajisetahun > pkp10){
                            Math.abs(pajak += pajak15(gajisetahun));
                            if(gajisetahun > pkp15){
                                Math.abs(pajak += pajak20(gajisetahun));
                                if(gajisetahun > pkp20){
                                    Math.abs(pajak += pajak25(gajisetahun));
                                }
                            }
                        }
                    }
                }else{
                    alert("Penghasilan anda tidak kena pajak");
                }
                document.getElementById("pph21tahun").innerHTML = pajak;
                document.getElementById("pph21bulan").innerHTML = pajak/12;
            // var pernikahan = document.getElementById("status").value;
            // var tanggungan = document.getElementById("jt").value;
            // var ptkp;
            // if(pernikahan == "Ya"){
            //     if(tanggungan == 0){
            //         document.getElementById("ptkpid").innerHTML="58500000";
            //         return ptkp = 58500000;
            //     }else if(tanggungan == 1){
            //         document.getElementById("ptkpid").innerHTML="63000000";
            //         return ptkp = 63000000;
            //     }else if(tanggungan == 2){
            //         document.getElementById("ptkpid").innerHTML="67500000";
            //         return ptkp = 67500000;
            //     }else{
            //         document.getElementById("ptkpid").innerHTML="72000000";
            //         return ptkp = 72000000;
            //     }
            // }else{
            //     if(tanggungan == 0){
            //         document.getElementById("ptkpid").innerHTML="54000000";
            //         return ptkp = 54000000;
            //     }else if(tanggungan == 1){
            //         document.getElementById("ptkpid").innerHTML="58500000";
            //         return ptkp = 58500000;
            //     }else if(tanggungan == 2){
            //         document.getElementById("ptkpid").innerHTML="63000000";
            //         return ptkp = 63000000;
            //     }else{
            //         document.getElementById("ptkpid").innerHTML="67500000";
            //         return ptkp = 67500000;
            //     }
            // }
            // var ptkp = document.getElementById("ptkpid").value;
            // var pkp = gajisetahun - ptkp;
            // document.getElementById("pkpid").innerHTML=pkp;
                    
            // if(pkp <= 50000000){
            //     pajak = 0.05 * 50000000;
            //     pph21a = pajak / 12;
            //     document.getElementById("pph21tahun").innerHTML=Math.abs(pajak);
            //     document.getElementById("pph21bulan").innerHTML=Math.abs(pph21a);
            // }else if(pkp > 50000000){
            //     pkp2 = pkp - 50000000;
            //     pajak1 = 0.05 * 50000000;
            //     pajak2 = 0.15 * pkp2;
            //     pph21b = (pajak1+pajak2)/12;
            //     document.getElementById("pph21tahun").innerHTML=Math.abs(pph21b*12);
            //     document.getElementById("pph21bulan").innerHTML=Math.abs(pph21b);
            // }
            // else if(pkp > 250000000){
            //     pkp3 = pkp - 50000000;
            //     pkp4 = pkp3 - 250000000;
            //     pajak3 = 0.05*50000000;
            //     pajak4 = 0.15*pkp3;
            //     pajak5 = 0.25*pkp4;
            //     pph21c = (pajak3+pajak4+pajak5)/12;
            //     document.getElementById("pph21tahun").innerHTML=Math.abs(pph21c*12);
            //     document.getElementById("pph21bulan").innerHTML=Math.abs(pph21c);
            // }
            // else if(pkp > 500000000){
            //     pkp5 = pkp - 50000000;
            //     pkp6 = pkp5 - 250000000;
            //     pkp7 = pkp6 - 500000000
            //     pajak6 = 0.05*50000000;
            //     pajak7 = 0.15*pkp5;
            //     pajak8 = 0.25*pkp6;
            //     pajak9 = 0.30*pkp7;
            //     pph21d = (pajak6+pajak7+pajak8+pajak9)/12;
            //     document.getElementById("pph21tahun").innerHTML=Math.abs(pph21d*12);
            //     document.getElementById("pph21bulan").innerHTML=Math.abs(pph21d);
            // }
        }
    
</script>
</body>

</html>