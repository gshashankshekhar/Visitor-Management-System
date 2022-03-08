<?php
include("connection.php");

if(isset($_POST['save']))
{
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$vanno=$_POST['vanno'];
$email=$_POST['email'];
$company=$_POST['company'];
$remark=$_POST['remark'];
$image=$_FILES['photo']['name'];
 $path="uploads/".$image;
 $temp=$_FILES['photo']['tmp_name'];
 move_uploaded_file($temp,$path);
 $query="insert into visitorinfo(name,mobileno,vanno,email,company,remark,image) values('$name','$mobileno','$vanno','$email','$company','$remark','$path')";
 $run=mysqli_query($link,$query);
if($run)
{	$query2="select * from visitorinfo where email='$email'";
	 $run2=mysqli_query($link,$query2);
	 $array=mysqli_fetch_assoc($run2);
	 $id=$array['id'];
	header("location:otherinfo.php?id=$id");
}
 else{
	 echo mysqli_error($link);
     }
	
}
elseif(isset($_POST['update']))
{
	$id=$_POST['id'];
	$path=$_POST['path'];
$name=$_POST['name'];
$dob=$_POST['mobileno'];
$contact=$_POST['vanno'];
$email=$_POST['email'];
$gender=$_POST['company'];
$password=$_POST['remark'];
 $image=$_FILES['photo']['name'];
	if($image!='')
	{
		$path="uploads/".$image;
 		$temp=$_FILES['photo']['tmp_name'];
 		move_uploaded_file($temp,$path);
	}
 echo $image;
 $query="update visitorinfo set name='$name', mobileno='$mobileno', vanno='$vanno', email='$email', company='$company', remark='$remark', image='$path' where id='$id' ";
 echo $query;
 $run=mysqli_query($link,$query);
if($run)
{
	echo "updated successfully";
}
 else{
	 echo mysqlei_error($link);
     }	
}
else{
	header("location:information.php");
}


	
?>