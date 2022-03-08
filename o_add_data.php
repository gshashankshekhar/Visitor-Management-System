<?php
include("connection.php");

if(isset($_POST['saveother']))
{
$visitorid=$_POST['visitorid'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$refid=$_POST['refid'];
$company=$_POST['company'];
$department=$_POST['department'];
$contact=$_POST['contact'];
$accessories=implode(',',$_POST['accessories']);

 $query="insert into otherinfo(visitorid,intime,outtime,refid,company,department,contactno,accessories) values('$visitorid','$t1','$t2','$refid','$company','$department','$contact','$accessories')";
 $run=mysqli_query($link,$query);
if($run)
{	
	header("location:information.php");
}
 else{
	 echo mysqli_error($link);
     }
	
}

else{
	header("location:information.php");
}


	
?>