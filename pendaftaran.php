<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN SISWA BARU</title>
	
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	
</head>

<body>

<nav class="navbar navbar-dark bg-primary">
	<div class="container">
	  <a class="navbar-brand">PENDAFTARAN SISWA BARU SMP 73 JAKARTA SELATAN </a>
  	</div>
</nav>

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
	  <h1 class="display-4 mx-auto">FORMULIR PENDAFTARAN SISWA BARU</h1>
	<hr>
	
	<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama"/>
		</div>

		<div class="form-group">
			<label for="foto">Foto</label><br>
            <input type="file" name="foto" class="form-control" required>
        </div>

		<div class="form-group">
			<label for="tgl_lahir">Tanggal Lahir</label><br>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"/>
        </div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>
		
		<div class="form-group">
			<label for="agama">Agama</label>
			<select name="agama" class="form-control">
			<option value="">-- Agama --</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" />
		</div>

		<div class="form-group">
			<label for="ortu_wali">Orang Tua/Wali</label>
			<input type="text" name="ortu_wali" class="form-control" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" />
		</div>

		<div class="form-group">
			<label for="wa">Nomer telephone</label>
			<input type="text" name="wa" class="form-control" />
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>

		<input type="submit" value="Daftar" class="btn btn-md btn-primary" name="daftar" />	
	</form>

</div>
</body>
</html>
