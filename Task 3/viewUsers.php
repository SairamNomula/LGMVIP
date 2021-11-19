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
$sem=$b['sem'];
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
<span class="subhead">View Students</span>
<br />
<br />
<table cellpadding="3" cellspacing="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#C60;"><th>S.No</th><th>Registration number</th><th>Name</th><th>Email</th><th>Delete</th></tr>
<?php 
$i=1;
$x=mysqli_query($al,"SELECT * FROM students WHERE sem='$sem'");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:16px;color:#3FF;">
<td><?php echo $i;$i++;?></td>
<td><?php echo $y['roll'];?></td>
<td><?php echo $y['name'];?></td>
<td><?php echo $y['email'];?></td>
<td><a href="delete.php?del=<?php echo $y['id'];?>" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;">Delete</a></td>
</tr>
<?php } ?>
</table>
<br />
<br />
<br />
<a href="home.php" class="cmd">Home</a>
</div>
</body>
</html>