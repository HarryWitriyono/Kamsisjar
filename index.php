<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login :: Belajar Hack 1</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
<form action="" method="post">
	<fieldset>
			<label for="user">Username</label> <input type="text" class="loginInput" size="20" name="username"><br />

			<label for="pass">Password</label> <input type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="password"><br />
			<br />
			<p class="submit"><input type="submit" value="Login" name="Login"></p>
	</fieldset>
</form>
</body>
</html>
<?php if (isset($_POST['Login'])) {
	$koneksi=mysqli_connect("localhost","root","","belajarhack");
	$username=htmlentities(mysqli_real_escape_string($koneksi,$_POST['username']));
	$password=htmlentities(mysqli_real_escape_string($koneksi,$_POST['password']));
	$sql="select * from pengguna where kodelogin='$username' and password='$password'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (!empty($r)) {
		echo "ANDA SUKSES LOGIN !";
	} else {
		echo "ANDA GAGAL LOGIN !";
	}
}
?>