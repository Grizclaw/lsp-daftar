	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="layout/style.css"> -->
	 <!-- Required meta tags -->
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="layout/login.css">
    
    <title>Login</title>
</head>
<body>
 
	<div class="container">
          <h1>Login</h1>
		  <form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<button type="submit" class="tombol_login" value="LOGIN"> Log In</button> 
 
			<br/>
			<br/>
			<p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
		</form>
        </div>
</body>
</html>