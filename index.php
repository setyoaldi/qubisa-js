<!Doctype html>
<html>
    <head>
        <title>Tim 4</title>
        <style>
        table, th, td {
            border:1px solid black;
          }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
	<body>
        <form action="index.php" method="post" align="center">
            <input type="submit" name="fetch" value="FETCH DATA" />
        </form>
        <?php
        //fetch connection details from database.php file using require_once(); function
        require_once ('database.php');
        //check if it work!
        echo $connection; //from database.php file
        if (isset($_POST['fetch']))
        {
            //mysql_query() performs a single query to the currently active database on the server that is associated with the specified link identifier
            $response = mysqli_query($connect, 'SELECT * FROM karyawan');
            echo "<table border='2' align='center'>
            <H2 align='center'> Tabel Karyawan </h2>
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Gaji per Bulan</th>
            <th>Cuti</th>
			<th>Absen</th>
			<th>Sakit</th>
            </tr>";
            while ($fetch = mysqli_fetch_array($response))
            {
                echo "<tr>";
                echo "<td>" . $fetch['id'] . "</td>";
                echo "<td>" . $fetch['nama'] . "</td>";
                echo "<td>" . $fetch['alamat'] . "</td>";
                echo "<td>" . $fetch['jabatan'] . "</td>";
                echo "<td>" . $fetch['gaji'] . "</td>";
                echo "<td>" . $fetch['cuti'] . "</td>";
				echo "<td>" . $fetch['absen'] . "</td>";
				echo "<td>" . $fetch['sakit'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($connect);
        }
        ?>
        <br><br><br><br><br><br><br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET" align="center">
			<p>Pilih Pegawai:</p>
			<select name="nama" style="width:150px;">
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
			<input type="submit" value="Pilih">
			<a href="./index.php">Refresh</a>
		</form>
		<h4 align="center">Data Pegawai</h4>
		<?php
		if (isset($_GET['nama'])) {
			$id_peg=$_GET['nama'];

			//menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
			$tamPeg=mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$id_peg'");
			$tpeg = mysqli_fetch_array($tamPeg);
		
		?>
		<form action="update.php" method="POST" >
		<table border="0" cellpadding="2" align="center">
			<tr>
				<td width="100">Id</td>
				<td width="280">: <input type="text" name="id" value="<?php echo $tpeg['id']; ?>" /></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama" value="<?php echo $tpeg['nama']; ?>" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="text" name="alamat" value="<?php echo $tpeg['alamat']; ?>" /></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>: <input type="text" name="jabatan" value="<?php echo $tpeg['jabatan']; ?>" /></td>
			</tr>
			<tr>
				<td id="gaji">Gaji per Bulan</td>
				<td>: <input type="text" name="gaji" value="<?php echo $tpeg['gaji']; ?>" /></td>
			</tr>
			<tr>
				<td>Cuti</td>
				<td>: <input type="text" name="cuti" value="<?php echo $tpeg['cuti']; ?>" /></td>
			</tr>
			<tr>
				<td>Absen</td>
				<td>: <input type="text" name="absen" value="<?php echo $tpeg['absen']; ?>" /></td>
			</tr>
			<tr>
				<td>Sakit</td>
				<td>: <input type="text" name="sakit" value="<?php echo $tpeg['sakit']; ?>" /></td>
			</tr>
			<tr>
				<td> Aksi</td>
				<td>&nbsp; <input type="submit" value="Simpan Perubahan"><input type="button" value="Hitung Gaji"><input type="button" value="Hitung PPH21"></td>
			</tr>
		</table>
		</form>
		<?php
		}
		?>
        <div id="hasilpilih"></div>
		<script>

		</script>
    </body>
</html>