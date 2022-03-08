<?php
include("connection.php");

if(isset($_POST['saveout']))
{
$id=$_POST['id'];
$t2=$_POST['t2'];

$query="update otherinfo set outtime='$t2',status='1' where id='$id' ";
 $run=mysqli_query($link,$query);
header("location:checkout.php");

}
?>