<!Doctype html>
<html>

<head>
    <title>Tim 4</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">Kelompok 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pegawai.php">Hitung Gaji & PPH21</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="index.php" method="post" align="center">
        <input type="submit" id="fe" name="fetch" value="Tampil Data" class="btn btn-primary" />
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
            echo "<div class='container' id='fet'>
			<table class='table table-bordered '>
            <H2 align='center' class='mb-5 mt-5'> Tabel Pegawai</h2>
			<thead class='table-dark'>
			<tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Gaji per Bulan</th>
            <th>Cuti</th>
			<th>Absen</th>
			<th>Sakit</th>
            </tr>
			</thead>
			<tbody class='table-group-divider'>
			";
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
            echo "</tbody></table></div>";

            mysqli_close($connect);
        }
        ?>
    <br><br><br><br><br><br><br>
</body>

</html>