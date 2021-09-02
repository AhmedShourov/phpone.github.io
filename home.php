<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

	<main class="form-signin container">
	  <form action="upload.php" method="post" enctype="multipart/form-data">	  	
	    
	    <input type="file" name="profile">	   	   
	    <input class="btn btn-primary" value="upload" type="submit">

	  </form>
	</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

$usr = $_POST['username'];
$em = $_POST['email'];
$pass = $_POST['password'];


if (empty($usr)) {
	header('Location: http://localhost/exam/examone/index.php');
}

?>