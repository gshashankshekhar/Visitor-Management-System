<?php
//print_r($_GET);
include("connection.php");

if(isset($_POST['save']))
{
	echo $_POST['id']."<br>";
	echo $_POST['name']."<br>";
	echo $_POST['contact']."<br>";
	echo $_POST['van_no']."<br>";
	echo $_POST['email']."<br>";
	echo $_POST['company']."<br>";
	echo $_POST['remark']."<br>";
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['van_no'];
$company=$_POST['company'];
$remark=$_POST['remark'];
 $image=$_FILES['photo']['name'];
 echo $image;
 $path="uploads/".$image;
 $temp=$_FILES['photo']['tmp_name'];
 move_uploaded_file($temp,$path);
 $query="insert into students(id,name,,contact,van_no,email,company,remark,image) values('$id','$name','$contact','$van_no','$email','$company',$remark','$path')";
 echo $query;
 $run=mysqli_query($link,$query);
if($run)
{
	echo "added successfully";
	
}
 else{
	 echo mysqlei_error($link);
 }
}
else{
	header("location:form.php");
}


	
?>