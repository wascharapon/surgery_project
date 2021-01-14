<?php 
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$name= $_POST['name'];
$phone= $_POST['phone'];

$sql ="INSERT INTO member (username,password,name,tel,status) VALUES ('$username','$password','$name','$phone','member');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('สมัครสมาชิกเรียบร้อย');window.location.href = 'http://localhost/mini_project/login.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>