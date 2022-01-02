<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: index.php?err=no_session");
  }
  ?>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Dashboard - Admin</title>
  </head>
  <body>
      <!-- Sidebar -->
      <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                </a>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <!--  
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="add_data.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add</span> Biodata </a>
                            </li>
                            <li>
                                <a href="read_data.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Read</span> Biodata </a>
                            </li>
                            <li>
                                <a href="update_data.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Update</span> Biodata </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Delete</span> Biodata </a>
                            </li>
                        </ul>
                    </li>
                     -->
                    <!--
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                     -->
                </ul>
                <hr>
                <div class="dropdown pb-4 fixed-bottom">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./img/profile.jpeg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?=$_SESSION['username'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah Anda Yakin?');">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <table class="table table-striped">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Action
        <button type="button" class="btn btn-success pt-1 pb-1" style="float:right;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"></path>
</svg></button></th>
    </tr>
</thead>
<tbody>
    <?php
    error_reporting(0);
    include "config.php";
    $batas = 10;
    $q = htmlentities(htmlspecialchars(mysqli_real_escape_string($dbc, $_REQUEST["q"])));
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
    //$result = mysqli_query($dbc, "SELECT * FROM `db_siswa` LIMIT 10");
    $id = 1;
    while ($row = mysqli_fetch_row($data_siswa)) {
        $id++
        ?>
    <tr>
        <th scope="row"><?=$nomor++; ?>.</th>
        <td><?=$row[1]; ?></td>
        <td><?=$row[2]; ?></td>
        <td><?=$row[3]; ?></td>
        <td><a class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?=$row[0]; ?>">
        <i class="bi bi-pencil-square"></i></a>

        <a href="delete_data.php?id=<?=$row[0];?>" class="btn-sm btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"><i class="bi bi-trash"></i></a></td>
</td>
<!-- Modal Update -->
<div class="modal fade" id="updateModal<?=$row[0]; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="update_data.php">
          <div class="mb-3 col-md-10">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="hidden" name="id" value="<?=$row[0];?>">
            <input type="text" class="form-control" name="nama" value="<?=$row[1];?>">
          </div>
          <div class="mb-3 col-md-7">
            <label for="message-text" class="col-form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="<?=$row[2];?>">
          </div>
          <div class="mb-3 col-md-4">
            <label for="message-text" class="col-form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?=$row[3];?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin data sudah benar?');">Update Data</button>
            </form>
      </div>
    </div>
  </div>
</div>
      <!-- ENd Modal Update -->
        <!-- <td><a href="update_data.php?id=<?=$row[0];?>"><i class="bi bi-pencil-square me-3 ps-1"></i></a><a href="delete_data.php?id=<?=$row[0];?>" onclick="return alert('Apakah anda yakin?')"><i class="bi bi-trash"></i></a></td> -->
    </tr>
    <?php
    }
    ?>
    <?php if (!empty($row)) echo '<script>alert("'.$q.' Tidak Ditemukan!");</script>'; ?>
</tbody>
</table>
<!-- End Table -->
<!-- Pagination -->
<nav>
			<ul class="pagination justify-content-end p-3">
				<li class="page-item">
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
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
        <!-- End Pagination -->
        </div>
    </div>
</div>
      <!-- End Sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>