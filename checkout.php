<?php
session_start();
include("connection.php");
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$query="select * from otherinfo where status='0'";
	$run=mysqli_query($link,$query);
	
}
else{
	header("location:information.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Out</title>
<link href="vvsitor.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<div class="wrapper">
<div class="header">
	<div class="logo"><img src="image/images.png" width="200" height="150"></div>
	<div class="title">VISITOR MANAGEMENT SYSTEM</div>
</div><!--end of header--> 

<div class="menu">
	 <li><a href="information.php">Visitor</a></li>
	 <li><a href="checkout.php">Check-out</a></li>
	 <li><a href="report.php">Report</a></li>
     <li><a href="logout.php">Logout</a></li>
</div><!--end of menu-->

<div class="content4">
<form>
	<table height="25" width="800" border="2" align="center">
		<tr>
	        <td>Visitor id</td>
		    <td>Company Name</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
    <?php
	while($array=mysqli_fetch_assoc($run))
	{
     ?>
		<tr>
			<td><?php echo $array['visitorid']; ?></td>
			<td><?php echo $array['company']; ?></td>
			<td><?php echo $array['status']; ?></td>
			<td><a href="outtime.php?id=<?php echo $array['id'];?>">click here</a></td>
		</tr>
		<?php
	}
	?>
	</table>
</form>
</div><!--end of content4-->
<div class="footer">
  <table width="983" height="55" border="0" valign="middle">
 		<div class="design">Design by : Shashank Shekhar</div>
 		<div class="poweredby">@Powered by : Shashank Shekhar Online Services</div>
    </table> 
</div><!--end of footer-->

</div ><!--end of wrapper--> 
</div><!--end of container-->

</body>
</html>