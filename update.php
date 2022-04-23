<?php
include_once ("koneksi.php");
$id  = $_GET['id'] ;
// $umur = $_GET['umur'] 
// $hobi = $_GET['hobi'] 

$query="SELECT * FROM tbl_057 WHERE id_057=".$id;

$hasil=mysqli_query($koneksi,$query);

?>

<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<h1>Update Data</h1><br>
	<form method="post" action="proseseditdata.php">
        <div class="form-floating mb-3">
			<input type="hidden" class="form-control" id="id_057" name="id_057" value="<?php echo $data['id_057'] ?>">
			<label for="floatingInput">id_057</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama_057" name="nama_057" value="<?php echo $data['nama_057'] ?>">
			<label for="floatingInput">nama_057</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="email_057" name="email_057" value="<?php echo $data['email_057'] ?>">
			<label for="floatingPassword">email_057</label>
		</div>
		<br>
		<input type="hidden" name="id" value="<?php echo $data['id_057']?>">
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	<?php } ?>
</body>