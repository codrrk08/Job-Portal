<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login page</title>
	<link rel="shortcut icon" href="images/corp.png" type="image/x-icon">
	<link rel="stylesheet" href="Login.css">
</head>
<body>
	<div class="image">
	<img src="images/Myhustle (2).png" alt="Logo" height="220px" width="auto">
	</div>
	<div class="box">
		<form autocomplete="off">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input  id="email" type="email" required="required">
				<span>Email Id</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input  id="pass" type="password" required="required">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
				<a href="signup.php">Signup</a>
			</div>
			<center>
			<button type="button" id="checkData" name="checkData" class="btn">Login</button>
		    </center>
		</form>
	</div>