<?php 
$conn = mysqli_connect('localhost','root','','inventory');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}
?>
