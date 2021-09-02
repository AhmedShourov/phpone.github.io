<?php  

$pro = $_FILES['profile'];
$name = $pro['name'];
$tmp_name = $pro['tmp_name'];

if (!empty($name)) {
	$srv = "uploads/";
	move_uploaded_file($tmp_name, $srv.$name);
	echo "<script>alert('File uploaded succesfully :)')</script>";
	$path = $srv.$name;
	echo  "<img src ='$path'>";
}
else{
	echo "<script>alert('File not found :(')</script>";
}
?>
<?php

$usr = $_POST['username'];
$em = $_POST['email'];
$pass = $_POST['password'];


if (empty($usr)) {
	header('Location: http://localhost/exam/examone/index.php');
}

?>