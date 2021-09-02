<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

	<main class="form-signin container">
	  <form action="home.php" method="post"><br>
	  	<div class="form-floating">
	      <input type="username" name="username" class="form-control" id="floatingInput" placeholder="Username" required> <br>
	      <label for="floatingInput">Username</label>
	    </div>
	    <div class="form-floating">
	      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required> <br>
	      <label for="floatingInput">Email address</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required> <br>
	      <label for="floatingPassword">Password</label>
	    </div>
	    <input class="w-100 btn btn-lg btn-primary" value="Login" type="submit">
	  </form>
	</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>