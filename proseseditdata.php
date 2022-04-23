<?php
include_once("koneksi.php");
if(isset($_POST['submit'])){
    $id = $_POST['id_057'];
    $nama = $_POST['nama_057'];
    $email = $_POST['email_057'];
    $query = "UPDATE tbl_057 SET nama_057='$nama',email_057 = '$email' WHERE id_057=$id";
    $hasil = mysqli_query($koneksi,$query);
    if($hasil){
        header('Location:index.php');
    }else{
        echo "GAGAL";
    }
}
?>


