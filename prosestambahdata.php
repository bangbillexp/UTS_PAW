<?php
include "koneksi.php";

$nama = $_POST['nama_057']; //'nama' didapat dari name pada form
$email = $_POST['email_057'];

$query = "INSERT INTO tbl_057 (nama_057,email_057) VALUE ('$nama','$email')" ;//nama,umur,hobi sesuai pada database

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header ('Location:index.php');
}else{
    echo "input data gagal";
}
?>