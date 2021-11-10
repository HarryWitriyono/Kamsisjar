<?php 
$koneksi=mysqli_connect("localhost","root","");
$sql="CREATE DATABASE testDB;";
$q1=mysqli_query($koneksi,$sql);
if ($q1) {
	echo "Database testDB sudah dibuat !";
} else {
	echo "Database testDB gagal dibuat !";
}
$sql2="CREATE TABLE testDB.Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);";
$q2=mysqli_query($koneksi,$sql2);
if ($q2) {
	echo "Tabel Persons berhasil dibuat !";
} else {
	echo "Tabel Persons gagal dibuat !";
}
?>
