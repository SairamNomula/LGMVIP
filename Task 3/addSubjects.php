<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$sem=$b['sem'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6=$_POST['s6'];
if($s1==NULL || $s2==NULL || $s3==NULL || $s4==NULL || $s5==NULL || $s6==NULL)
{
	// 
}
else
{	
	$sql=mysqli_query($al,"INSERT INTO subjects(s1,s2,s3,s4,s5,s6,sem) VALUES('$s1','$s2','$s3','$s4','$s5','$s6','$sem')");
	if($sql)
	{
		$msg="Saved successfully!";
	}
	else
	{
		$msg="Already Saved for Your Sem";
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
<span class="subhead">Add Subjects</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="10" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Subject 1 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s1" /></td></tr>

<tr><td class="labels">Subject 2 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s2" /></td></tr>

<tr><td class="labels">Subject 3 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s3" /></td></tr>

<tr><td class="labels">Subject 4 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s4" /></td></tr>

<tr><td class="labels">Subject 5 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s5" /></td></tr>

<tr><td class="labels">Subject 6 : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter Subject Name" name="s6" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="button" value="Save" /></td></tr>
</table>
</form>
<br />
<br />
<br />
<a href="home.php" class="cmd">Home</a>
</div>
</body>
</html>