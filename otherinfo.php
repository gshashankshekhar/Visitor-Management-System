<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else{
   header("location:information.php");
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

<form method="post" action="o_add_data.php">
<div class="content2">
     <td>
        <fieldset>
	     <legend><b>Reference</b></legend>
          <table width="965" height="269" border="0" align="center">
           <tr>
               <td width="162" height="39">ID:</td>
               <td width="223"><input type="text" name="refid"></td>
           </tr>
           <tr>
               <td height="41">COMPANY:</td>
               <td><select name="company">
                   <option value="">-select one-</option>
                   <option value="RSG">RSG</option>
                   <option value="SYNAPSE DESIGN"> SYNAPSE DESIGN</option>
                   <option value="ASILICON DESIGN">ASILICON DESIGN</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td height="44">DEPARTMENT:</td>
               <td><input type="text" name="department"></td>
           </tr>
           <tr>
               <td height="34">CONTACT No.:</td>
               <td><input type="tel" maxlength="10" name="contact"></td>
           </tr>
          </table>
        </fieldset>
       </td>
       <tr><td width="492">
        <fieldset>
         <legend><b><u>Accessories</u></b> </legend>
          <table width="489" height="200" border="0"  align="left" >
           <tr>
               <td width="71"><input type="checkbox" name="accessories[]" value="mobile"></td>
               <td width="408"><strong>Mobile</strong></td>   
           </tr>
           <tr>
              <td><input type="checkbox" name="accessories[]" value="laptop"></td>
              <td><strong>Laptop</strong></td>
           </tr>    
           <tr>
               <td><input type="checkbox" name="accessories[]" value="camera"></td>
               <td><strong>Camera</strong></td>   
           </tr>
           <tr>
               <td><input type="checkbox" name="accessories[]" value="other"></td>
               <td><strong>Other</strong></td>
           </tr>     
           <tr>
               <td><strong>Storage:</strong></td>
               <td><select name="accessories[]">
                   <option value="">-select one-</option>
                   <option value="Pendrive">Pendrive</option>
                   <option value="CD"> CD</option>
				   <option value="DVD"> DVD</option>
                   <option value="Hard disk">Hard disk</option>
                   </select>
               </td>
           </tr>
          </table>
        </fieldset>
       </td>
       </tr>
</div><!--end of content2-->
<input hidden="id" name="visitorid" value="<?php echo $id?>">
<div class="content3">
<td>In-Time:<input type="time" name="t1" required placeholder="In Time">
        <sup style="color:red">*</sup>
       
      </td>
         <br><br>
         <td>
          <input type="Submit" name="saveother" value="Submit" >
          <input type= "Submit" value="Print">
        </td>
</div><!--end of content3-->
</form>
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
