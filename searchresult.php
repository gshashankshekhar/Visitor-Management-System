<?php
include("connection.php");
$name='';
if(isset($_GET['search']))
{
	$name=$_GET['name'];
	$query="select * from visitorinfo where name='$name'";

}
else{
$query="select * from visitorinfo";

}
$run=mysqli_query($link,$query);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="vvsitor.css">
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

<div class="content6">
	

<form>
	<input type="text" name="name" value="<?php echo $name;?>">
	<input type="submit" name="search" value="search">
</form><br><br>
<table border="4" align="center">
	<tr>
		<td> ID</td>
		<td> NAME</td>
		<td> MOBILE NO</td>
		<td> VAN NO</td>
		<td> EMAIL</td>	
		<td> COMPANY</td>
		<td> REMARK</td>
		<td> ACTION</td>
	</tr>
	<?php
	while($array=mysqli_fetch_assoc($run))
	{
		?>
		<tr>
			<td><?php echo $array['id']?></td>
			<td><?php echo $array['name']?></td>
			<td><?php echo $array['mobileno']?></td>
			<td><?php echo $array['vanno']?></td>
			<td><?php echo $array['email']?></td>
			<td><?php echo $array['company']?></td>
			<td><?php echo $array['remark']?></td>
			
			<td> <a href="otherinfo.php?id=<?php echo $array['id'];?>">
			checkin</a></td>
		</tr>
		<?php
	}
	?>
</table>
</div><!--end of content6-->
<div class="footer">
    <table width="983" height="55" border="0" valign="middle">
 		<div class="design">Design by : Shashank Shekhar</div>
 		<div class="poweredby">@Powered by : Shashank Shekhar Online Services</div>
    </table>
</div><!--end of footer-->
</div><!--end of wrapper--> 
</div><!--end of container-->
</body>
</html>