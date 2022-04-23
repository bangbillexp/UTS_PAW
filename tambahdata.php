<?php
include "koneksi.php";
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<H1>Tambah Data</h1>
	<form method="post" action="prosestambahdata.php">
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama_057"  name="nama_057" placeholder="Masukkan nama" >
			<label for="floatingPassword">nama_057</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="hobi"  name="email_057" placeholder="Masukkan Gmail">
			<label for="floatingPassword">email_057</label>
		</div>
		<br>
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
</body>