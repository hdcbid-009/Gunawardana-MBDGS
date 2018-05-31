
<!doctype html>
<html>
<head>
	<title>registration page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
	  <h1>Register here</h1>
    </div>
    
<form method="post" action="conn.php">
	
	<div class="input-list">
		<lable>Username</lable>
		<input type="text" name="uname">
	</div>
	<div class="input-list">
		<lable>Password</lable>
		<input type="password" name="password">
	</div>
	<div class="input-list">
		<button type="submit" name="login" class="btn">Register</button>
	</div>

	<div class="checkbox">
  <label><input type="checkbox" name="check" value="">Remember me</label>
</div>

	
		<p>
			Already a member?<a href="signin.php">sign in</a>
		</p>
</form>
</body>
</html>
