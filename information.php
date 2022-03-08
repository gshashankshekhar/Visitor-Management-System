<?php
session_start();
include("connection.php");
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$query="select * from users where id='$id'";
	$run=mysqli_query($link,$query);
	$array=mysqli_fetch_assoc($run);
}
else{
	header("location:logout.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>visitor information</title>
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

<div class="banner">
     <div class="SearchBar">
      <form action="searchresult.php" method="get">
        <input type="text" name="name" placeholder="Search..........." class="searchinput">
        <input type="submit" name="search" value="Go" class="search-btn">
      </form>
     </div><!--end of searchbar-->
</div><!--end of banner-->

<div class="content">
   <form method="post" action="v_add_data.php" enctype="multipart/form-data">
   	<fieldset>
   	<table width="900" height="280" border="0">
        <td width="382"><form>
           <fieldset>
            <legend><b><u>Visitor Information</u></b></legend>
            <table  align="left" width="300" border="0" >
            <tr>
              	
              
              <tr>
				  <td><b>Name:</b></td>
                <td><input type="text" name="name" required placeholder="Full name">
                <sup style="color:white">*</sup></td>
              </tr>
              <tr>
				  <td><b>Mobile No.:</b></td>
                <td><input type="tel" maxlength="10" name="mobileno" required placeholder="contact no">
                <sup style="color:white">*</sup></td>
              </tr>
              <tr>
				  <td><b>Van No.:</b></td>
                <td><input type="text" name="vanno" required placeholder="van no">
                <sup style="color:white">*</sup></td>
              </tr>
              <tr>
				  <td><b>Email:</b></td>
                <td><input type="email" name="email" required placeholder="email id">
                <sup style="color:white">*</sup></td>
              </tr>
              <tr>
				  <td><b>Company:</b></td>
                <td><input type="text" name="company"  placeholder="company name">
                <sup style="color:white">*</sup></td>
              </tr>
              <tr>
				  <td><b>Remark:</b></td>
                <td><input type="text" name="remark"></td>
              </tr>
              </tr>
              
            </table>
          </fieldset>
          </form>
      </td>
      <td> 
          Upload:<input type="file" name="photo" required placeholder="image">
      </td>
      <tr>
        <td>
          <input type="Submit" name="save" value="Submit" >
          <input type= "Submit" value="Print">
        </td>
      </tr>
      </table>	
   	</fieldset>
   </form>
    
 </div><!--end of content-->
 
 
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
