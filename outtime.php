<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else{
   header("location:checkout.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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

<div class="content5">
	<form action="update_data.php" method="post">
		 Out-Time:<input type="time" name="t2"><br><br><input type="hidden" name="id" value="<?php echo $id;?>">
		 <input type="Submit" name="saveout" value="Submit" >
	</form >
</div>
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