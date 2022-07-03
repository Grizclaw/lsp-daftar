<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: datasiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<?php
	require "layout/header.php";
?>

<div class="container mt-3 col-lg-5">
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>
	
	<form action="proses-edit.php" method="POST" >
			
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>" />
		</div>

		<div class="form-group">
			<label for="tgl_lahir">Tanggal Lahir</label><br>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"/>
        </div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<?php $jk = $siswa['jenis_kelamin']; ?>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>

		<div class="form-group">
			<label for="agama">Agama</label>
			<?php $agama = $siswa['agama']; ?>
			<select class="form-control" name="agama">
			<option value="">-- Agama --</option>
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" value="<?php echo $siswa['sekolah_asal'] ?>" />
		</div>

		<div class="form-group">
			<label for="ortu_wali">Orang Tua/Wali</label>
			<input type="text" name="ortu_wali" class="form-control" value="<?php echo $siswa['ortu_wali'] ?>" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $siswa['email'] ?>" />
		</div>

		<div class="form-group">
			<label for="wa">wa</label>
			<input type="text" name="wa" class="form-control" value="<?php echo $siswa['wa'] ?>" />
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</div>

		<input type="submit" class="btn btn-primary" value="Update" name="simpan" />
		<a href="datasiswa.php" class="btn btn-danger">Batal</a>
		
		</fieldset>
	
	</form>

</div>	
</body>
</html>
