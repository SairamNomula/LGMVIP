<?php
include("config.php");
$d=$_GET['del'];
$sql=mysqli_query($al,"DELETE FROM students WHERE id='$d'");
if($sql)
{
	?>
	<script type="text/javascript" language="javascript">
	alert('Successfully deleted!');
	window.location="viewUsers.php";
	</script>
<?php

}
?>