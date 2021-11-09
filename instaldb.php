<?php 
$koneksi=mysqli_connect("localhost","root","");
$sql1="create database belajarhack";
$q=mysqli_query($koneksi,$sql1);
if ($q) {
	echo "Basisdata belajarhack sudah dibuat !<br>";
	} else {
	echo "Basisdata belajarhack gagal dibuat !<br>";
	}
$sql2="create table belajarhack.pengguna (
       kodelogin varchar(50) not null primary key,
       namapengguna varchar(50) not null,
       password varchar(50) not null)";
$q2=mysqli_query($koneksi,$sql2);
if ($q2) {
	echo "Tabel pengguna sudah dibuat !<br>";
	} else {
	echo "Tabel pengguna gagal dibuat !<br>";
	}
$sql3="insert into belajarhack.pengguna values (
       'admin','Administrator','Password')";
$q3=mysqli_query($koneksi,$sql3);
if ($q3) {
	echo "Tabel pengguna berhasil diisi !<br>";
	} else {
	echo "Tabel pengguna gagal diisi !<br>";
	}
?>