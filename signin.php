<?php if(isset($_POST['uname']))
{
	$db=mysql_connect('localhost','root', '','users');
	$connection=mysqli_select_db($db,"registration");
	$username=$_POST['uname'];
	$password=['password'];
	$query="select * from users where uname='$username' and password='$password'";
	$data=mysqli_query($connection,$query);
	$row=mysqli_fetch_array($data);
	if($username==$row['username'] && $password==$row['password'])
	{
			header('Location:index.php');
	}
	else
	{
		echo"failed";
	}
} 

?>
<!doctype html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	  <h1>Sign in</h1>
    </div>
<form method="post" action="signin.php">
	<?php include('error.php'); ?>
	<div class="input-list">
		<lable>Username</lable>
		<input type="text" name="uname">
	</div>
	<div class="input-list">
		<lable>Password</lable>
		<input type="password" name="password">
	</div>
	<div class="input-list">
		<button type="submit" name="signin" class="btn">Sign in</button>
	<p>
			Not a member?<a href="register.php">sign up</a>
		</p>
</form>
</body>
</html>
