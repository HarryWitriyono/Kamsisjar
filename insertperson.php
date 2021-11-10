<!DOCTYPE html>
<html>
<body>

<h2>Form Person</h2>

<form action="" method="post">
  <label for="personid">Person ID:</label><br>
  <input type="text" id="personid" name="personid" value=""><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="address">Address:</label><br>
  <textarea name="address" rows="10" cols="30"></textarea><br>
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city" value=""><br><br>
  <input type="submit" value="Submit" name="bSubmit">
</form> 

<p>Silahkan isi data diatas setelah itu klik SUBMIT".</p>

</body>
</html>
<?php 
if (isset($_POST['bSubmit'])) {
	$koneksi = mysqli_connect("localhost","root","","testDB");
	$personid=$_POST['personid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
$sql="insert into Persons (PersonID,LastName,FirstName,Address,City)
      values ('".$personid."','".$lname."','".$fname."','".$address."','".$city."')";
$qq=mysqli_query($koneksi,$sql);
if ($qq) {
 echo "Rekord sudah tersimpan !";
} else {
 echo "Rekord gagal tersimpan !";
} 
}
?>