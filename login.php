<?php
session_start();
include("connection.php");
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from users where username='$username' and password='$password'";
	$run=mysqli_query($link,$query);
	if(mysqli_num_rows($run)!=0)
	{
		$array=mysqli_fetch_assoc($run);
		$id=$array['id'];
		$_SESSION['id']=$id;
		header("location:information.php");
	}
	else{
		echo"wrong username or password";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login page</title>
<link href="vvsitor.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-size: 20px;
}
</style>
</head>

<body>
<h1> WELCOME TO SHASHANK SHEKHAR ONLINE SERVICES </h1>
<form action="" method="post">
 <div class="imgcontainer">
    <img src="image/login.PNG" alt="login" class="login">
  </div>
	Username:<input type="text" name="username"><br/><br/>
	Password:<input type="password" name="password"><br/><br/>
	<input type="submit" name="login" value="login">
	
</form>
</body>
</html>
