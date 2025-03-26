<?php

$conn = mysqli_connect("localhost","root","","mhs");

if(!$conn){
	echo "Mohon maaf, Koneksi ke database gagal";
	die("Connection failed:" . mysqli_connect_error());
} 

?>