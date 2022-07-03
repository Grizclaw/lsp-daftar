<?php
	require "layout/header.php";
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
    $p = mysqli_fetch_object($query);


    
    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }


?>

<style type="text/css">           
            .content {
	            width: 100%;
	            padding: 10px;
	            box-sizing: border-box;
            }
            .box{
	            background-color: #fff;
	            border: 1px solid #ddd;
	            padding: 5px;
	            box-sizing: border-box;
	            margin: 5px 0 25px;
            }           
            
        </style>

<!--bagian content-->
<div class="container mt-3">
	<div id="layoutSidenav_content">        
		<section class="content">
			<h2>Biodata Siswa</h2><br>
			<div class="box">
				<a class="breadcrumb-item active">Biodata</a><hr>
			<table class="table-data" border="0"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="fotodaftar/<?php echo $p->foto; ?>" width="200" height="150"><br><br>
				<tr>
					<td>Nama Siswa</td>
					<td>:</td>
					<td><?php echo $p->nama ?></td>
				</tr>
                <tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tgl_lahir ?></td>
				</tr>
                <tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $p->jenis_kelamin ?></td>
				</tr>
                <tr>
					<td>Agama</td>
					<td>:</td>
					<td><?php echo $p->agama ?></td>
				</tr>
                <tr>
					<td>Sekolah Asal</td>
					<td>:</td>
					<td><?php echo $p->sekolah_asal ?></td>
				</tr>
                <tr>
					<td>Nama Orangtua/Wali</td>
					<td>:</td>
					<td><?php echo $p->ortu_wali ?></td>
				</tr>
                <tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $p->email ?></td>
				</tr><tr>
					<td>wa</td>
					<td>:</td>
					<td><?php echo $p->wa ?></td>
				</tr>

                <tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $p->alamat ?></td>
				</tr>
			
			</table>
			
			
		</div>
		</section>
	</div>
</div>