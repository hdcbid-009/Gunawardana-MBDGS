<?php

$con = mysqli_connect('localhost','root','','users');
$result = mysqli_query($con,"select * from ud");

       if($row = mysqli_fetch_array($result)){
    	    $uname = $row['Name'];
    	    $upwd = $row['Password'];
    };
       if(isset($_POST['login'])){

	        $Name=$_POST['name'];
	        $Pwd=$_POST['pwd'];
	

	  if($Name==$uname and $Pwd==$upwd){
		
		   session_start();
           $_SESSION['NAME'] = $uname;
           header("location: index.php");
	

	if(isset($_POST['check'])){

		setcookie('name',$uname,time()+60);
		setcookie('pwd',$upwd,time()+60);
		
	};


    }else{

    	echo "Your Email Or Password Wrong";
    };



}else{
header("location: register.php");
};
?>