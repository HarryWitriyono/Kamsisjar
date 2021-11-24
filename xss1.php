<?php if (!isset($_SESSION)) session_start();
if (!empty($_SESSION['Login'])) {
$var1=filter_var(htmlentities(@$_GET['v1']),FILTER_SANITIZE_STRING);
$var2=@$_GET['v2'];
echo "<h2><center>".filter_var($var1,FILTER_SANITIZE_STRING).'</center></h2>';
echo "<h2><center>".$var2.'</center></h2>';
} else {
	echo "Masuk dengan akun belajar.id
Saat ini aplikasi masih terbatas untuk guru program Sekolah Penggerak atau SMK Program Keunggulan. Nantikan akses untuk semua guru, segera!


Google logo
Masuk dengan Google (belajar.id)
Belum punya atau belum mengaktifkan akun? Pelajari di sini";
}
?>