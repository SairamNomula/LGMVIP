<?php
include("config.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
$email=mysqli_real_escape_string($al,$_POST['email']);
$pass=mysqli_real_escape_string($al,sha1($_POST['pass']));
if($_POST['email']==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email' AND password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$email;
		header("location:home.php");
	}
	else
	{
		$msg="Incorrect Email ID or Password";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Result Management System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br />

<div align="center">
<span class="head">Student Result Display</span>
<br />
<br />
<span class="subhead">Faculty Login</span>
<br />
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="15" cellspacing="10" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Email ID :</td><td><input type="text" required="required" name="email" class="fields" size="15" placeholder="Enter Email ID" /></td></tr>
<tr><td class="labels">password :</td><td><input type="password" required="required" name="pass" class="fields" size="15" placeholder="Enter Password" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" class="button" /></td></tr>
</table>
</form>
<br />
<br />
<a href="index.php" class="link">Home</a>
</div>
</body>
</html>