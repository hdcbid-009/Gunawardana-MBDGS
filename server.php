<?php 
session_start(); 

 $uname="";
 $error=array();


$db=mysql_connect('localhost','root', '', 'registration');

if(isset($_POST['register']))
{
	$uname=mysql_real_escape_string($db, $_POST['uname']);
	$password=mysql_real_escape_string($db, $_POST['password']);
  $password=mysql_real_escape_string($db, $_POST['repassword']);

   if(empty($uname))
   {array_push($error,"user nameis required");

   }
   if(empty($password))
   {array_push($error,"password required");

   }
   if(empty($repassword))
   {array_push($error,"confirm password");

   } 
   if($password!=$repassword)
   {
    array_push($error,"password do not match");
   }

   $user_check_query="SELECT* FROM users WHERE uname";
   $result=mysql_query($db,$$users_check_query);
   $users=mysql_fetch_assoc($result);

   if($users)
   {
    if($users['uname']===$uname)
    {
      array_push($error,"Username already exists");
    }

  }

   if (count($error) == 0)
     {
   $password=md5($password);
   $query="INSERT INTO users(uname,password)VALUES('$uname','$password')";
   my_sql_query($db,$sql);
   $_SESSION['uname'] = $uname;
    $_SESSION['success'] = "You are now logged in";
    

}


}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $urname = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($uname)) {
    array_push($error, "Username is required");
  }
  if (empty($password)) {
    array_push($error, "Password is required");
  }

  if (count($error) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE uname='$uname' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $uname;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($error, "Wrong username/password combination");
    }
  }
}

?> 