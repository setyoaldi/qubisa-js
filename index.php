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
            <th>Jumlah Hari Kerja</th>
            </tr>";
            while ($fetch = mysqli_fetch_array($response))
            {
                echo "<tr>";
                echo "<td>" . $fetch['id'] . "</td>";
                echo "<td>" . $fetch['nama'] . "</td>";
                echo "<td>" . $fetch['alamat'] . "</td>";
                echo "<td>" . $fetch['jabatan'] . "</td>";
                echo "<td>" . $fetch['gaji'] . "</td>";
                echo "<td>" . $fetch['jhk'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($connect);
        }
        ?>
        <br><br><br><br><br><br><br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
			<p>Pilih Pegawai:</p>
			<select name="id" style="width:100px;">
               <?php
				include "database.php";
				//query menampilkan nip pegawai ke dalam combobox
				$query	=mysqli_query($connect, "SELECT * FROM karyawan ORDER BY id");
				while ($data = mysqli_fetch_array($query)) {
				?>
				<option value="<?=$data['id'];?>"><?php echo $data['id'];?></option>
				<?php
				}
				?>
            </select>
			<input type="submit" value="Pilih">
			<a href="./index.php">Refresh</a>
		</form>
		<h4>Data Pegawai</h4>
		<?php
		if (isset($_GET['id'])) {
			$id_peg=$_GET['id'];

			//menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
			$tamPeg=mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id_peg'");
			$tpeg = mysqli_fetch_array($tamPeg);
		
		?>
		<form action="update.php" method="POST">
		<table border="0" cellpadding="2">
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
				<td>Gaji per Bulan</td>
				<td>: <input type="text" name="gaji" value="<?php echo $tpeg['gaji']; ?>" /></td>
			</tr>
			<tr>
				<td>Jumlah Harian Kerja</td>
				<td>: <input type="text" name="jhk" value="<?php echo $tpeg['jhk']; ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp; <input type="submit" value="Save"></td>
			</tr>
		</table>
		</form>
		<?php
		}
		?>
        <div id="hasilpilih"></div>

    </body>
</html>