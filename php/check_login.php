<?php 
session_start();
include'connect.php';
if($_POST['username']!=''&&$_POST['password']!='')
{
	$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "SELECT * FROM member WHERE username='$username' && password='$password'";
$rs = mysqli_query($con,$sql);
$num = mysqli_num_rows($rs);

if($num==1)
{
  if($bn=mysqli_fetch_array($rs))
  {	  
  $_SESSION['id']=$bn['id'];
	  $_SESSION['name']=$bn['name'];
	    $_SESSION['status']=$bn['status'];

		if($_SESSION['status']=='admin')
		{
			echo "<script>alert('เข้าสู่ระบบเรียบร้อย');window.location.href = 'http://localhost/mini_project/admin/index.php';</script>";
		}
		else
		{
				echo "<script>alert('เข้าสู่ระบบเรียบร้อย');window.location.href = 'http://localhost/mini_project/user/index.php';</script>";
			
		}
  }
  
}
else
{
			echo "<script>alert('ไอดีหรือรหัสผ่านไม่ถูกต้อง');window.location.href = 'http://localhost/mini_project/login.php';</script>";
}
}
else
{
		echo "<script>alert('กรุณากรอกข้อมูลให้เรียบร้อบ');window.location.href = 'http://localhost/mini_project/login.php';</script>";
}

?>