<?php

  require_once 'config.php';
  if(array_key_exists('submit', $_POST)) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  $sql = "INSERT INTO user (nama, username, password, level) 
			VALUE ('$nama', '$username', '$password', 'user')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: daftar.php?status=gagal');
	} 
  }

?>
<!-- Daftar -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="layout/daftar.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    
    <title>Sign-Up</title>
  </head>
  <body>
    <div class="container">
      <div class="title">Sign-Up</div>
      <div class="content">
        <form method="POST" action="">
          <div class="user-details">

          <input type="hidden" name="tujuan" value="DAFTAR">

            <div class="input-box">
              <span class="details">Nama</span>
              <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required />
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" id="username" name="username" placeholder="Masukkan username" required />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" id="password" name="password" placeholder="Masukkan password"  required />
            </div>
          </div>
          <div class="button">
            <input type="submit" name="submit" value="Register" />
            <p> Sudah punya akun?
                  <a href="index.php">Login di sini</a>
                </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<!-- Akhir Daftar-->