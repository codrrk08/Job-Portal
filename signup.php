<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SignUp page</title>
	<link rel="shortcut icon" href="images/corp.jpg" type="image/x-icon">
	<link rel="stylesheet" href="signup.css">
</head>
<body>
	<div class="image">
	<img src="images/Myhustle (2).png" alt="Logo" height="220px" width="auto">
	
	</div>
	<div class="box">
		<form autocomplete="off">
			<h2>Sign up</h2>
			<div class="inputBox">
				<input type="text" required="required" id="Name">
				<label for="exampleInputName" class="form-label"></label>
				<span id="errorname" >Name</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="number" required="required" id="Number">
				<label for="exampleInputNumber" class="form-label"></label>
				<span id="errornumber">Number</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="email" required="required" id="email">
				<label for="exampleInputEmail" class="form-label"></label>
				<span id="erroremail">Email Id</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" id="pass">
				<label for="exampleInputPassword" class="form-label"></label>
				<span id="errorpassword">Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="login.php">Sign in</a>
			</div>
			<center>
				<button class="btn" type="button" id="submitData" name="Sign Up" >Submit</button>
			</center>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="main1.js"></script>
</body>
</html>