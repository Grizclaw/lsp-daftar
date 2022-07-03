<?php
	session_start();
	require "layout/header.php";
	include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN SISWA BARU</title>
	
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="layout/style.css">

	
</head>

<body>


<div class="container">

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div class='alert alert-success' role='alert'>
						  Pendaftaran Siswa Berhasil!
						</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>
						  Pendaftaran Siswa Gagal!
						</div>";
			}
		?>
	</p>
<?php endif; ?>

	<div class="jumbotron mt-3">
	  <h1 class="display-4 mx-auto">PENDAFTARAN SISWA BARU</h1>
	  <hr class="my-3">
	  <h2>Selamat Datang, <?php echo $_SESSION['username'] ?></h2>
	  <p>SMP 73 JAKARTA SELATAN</p>
	  
	  <a class="btn btn-primary btn-md my-3" href="pendaftaran.php" role="button">Pendaftaran</a>
	  <table class="table" border="1">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>wa</th>
			<th>foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
			<?php
			// buat query untuk ambil data dari database
				$no = 1;
				$sql = mysqli_query($db, "SELECT * FROM calon_siswa");
				while ($row = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['wa']?></td>
				<td>
				<img src="fotodaftar/<?= $row['foto']; ?>" width="70">
				</td>
				
				<td>
					<a href="biodata.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fas fa-book"></i>Detail&nbsp;&nbsp;</a>
				</td>
			</tr>

			<?php } ?>
		
	</tbody>
	</table>
	</div>
	
</div>	
</body>
</html>
