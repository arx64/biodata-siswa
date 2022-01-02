<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Biodata Peserta Didik</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <!-- 
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
         -->
      </ul>
      <form class="d-flex" action="" method="GET">
        <input class="form-control me-2" type="text" placeholder="Cari Nama" name="q" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<!-- Table -->
<table class="table table-resposive table-striped mt-5">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
    </tr>
</thead>
<tbody>
    <?php
    error_reporting(0);
    include "admin/config.php";
    $batas = 10;
    $q = mysqli_real_escape_string($dbc, htmlspecialchars(htmlentities(stripcslashes($_REQUEST["q"]))));
    //echo $q;
	$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
	$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

	$previous = $halaman - 1;
	$next = $halaman + 1;

	$data = mysqli_query($dbc,"select * FROM `db_siswa`");
	$jumlah_data = mysqli_num_rows($data);
	$total_halaman = ceil($jumlah_data / $batas);

    if (!empty($q)) {
       // $data_siswa = mysqli_query($dbc, "SELECT * FROM `db_siswa` WHERE nama = `$q`");
        $data_siswa = mysqli_query($dbc, "select * from `db_siswa` where nama like '%$q%'");	
        //$data_siswa = mysqli_result($dbc, $data_siswa);
    } else {
    $data_siswa = mysqli_query($dbc, "select * FROM `db_siswa` limit $halaman_awal, $batas");
    }
	$nomor = $halaman_awal+1;
  $no1 = $nomor;
  $nomor1 = $no1-1+1;
    //$result = mysqli_query($dbc, "SELECT * FROM `db_siswa` LIMIT 10");
    $id = 1;
    while ($row = mysqli_fetch_row($data_siswa)) {
        $id++
        ?>
    <tr>
      <?=$no1 = $nomor; ?>
        <th scope="row"><?=$nomor++; ?>.</th>
        <td><?=$row[1]; ?></td>
        <td><?=$row[2]; ?></td>
        <td><?=$row[3]; ?></td>
    </tr>
    <?php
    }
    ?>
    <?php if (!empty($row)) echo '<script>alert("'.$q.' Tidak Ditemukan!");</script>'; ?>
</tbody>
</table>
<!-- End Table -->

<!-- Tes -->

<!-- tes -->
<!-- 
<nav>
  <ul class="pagination justify-content-start">
    <li class="page-item active">Showing of <?=$jumlah_data;?></li>
  </ul>
</nav>
 -->
<!-- Pagination -->
<nav>
<ul class="pagination justify-content-start">
    <li class="page-item active">Showing of <?=$nomor1." to ".$no1." from ".$jumlah_data;?></li>
  </ul>
			<ul class="pagination justify-content-end m-2">
				<li class="page-item active">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item active">
					<a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
        <!-- End Pagination -->
        <div class="m-5 p-2"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <footer class="bg-dark text-light text-center p-3 fixed-bottom">Copyright &copy; 2021 - M. Arifin Ilham</footer>
  </body>
</html>