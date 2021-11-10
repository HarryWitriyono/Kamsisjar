<?php 
$koneksi=mysqli_connect("localhost","root","");
$sql="create database kelompok";
$q1=mysqli_query($koneksi,$sql);
if ($q1) {
echo "Database kelompok berhasil dibuat !";
} else {
echo "Database kelompok gagal dibuat !";
}
$sql2="create table kelompok.mahasiswa (
NPM varchar(10) not null primary key,
Nama varchar(30),
Password varchar(15))";
$q2=mysqli_query($koneksi,$sql2);
if ($q2) {
 echo "Tabel mahasiswa berhasil dibuat !";
} else {
 echo "Tabel mahasiswa gagal dibuat !";
}
$sql3="create table kelompok.dosen(
NIDN varchar(10) not null primary key,
NamaDosen varchar(30),
Password varchar(15))";
$q3=mysqli_query($koneksi,$sql3);
if ($q3) {
 echo "Tabel Dosen berhasil dibuat !";
} else {
 echo "Tabel Dosen gagal dibuat !";
}
?>