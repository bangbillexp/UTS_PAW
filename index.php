<?php
include 'koneksi.php' ;
$query = "SELECT * FROM tbl_057 ";
$hasil = mysqli_query($koneksi,$query);
?>
<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
<body>
	<table align="center" class="table table-dark table-striped"  style="width: 800px; margin-top: 50px">
		<tr>
			<td>id_057</td>
			<td>nama_057</td>
			<td>email_057</td>
			<td></td>
            <td></td>
		</tr>
		<?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
		   	?>
		   	<tr>
		   		<td><?php echo $baris['id_057']?></td>
		   		<td><?php echo $baris['nama_057']?></td>
		   		<td><?php echo $baris['email_057']?></td>
		   		<td><a class="btn btn-primary" href="update.php?id=<?php echo $baris["id_057"] ?>" role="button">Update</a></td>
		   		<td><a class="btn btn-primary" href="delete.php?id=<?php echo $baris["id_057"] ?>" 
				  onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a></td>

		   	</tr>
		<?php }?>
</table>
		<a class="btn btn-primary" href="tambahdata.php" role="button" style="margin-left: 280px">Insert</a>