<?php 
session_start();
error_reporting(0);
if($_SESSION['status']!='member')
{
		echo "<script>alert('ขออภัยพื้นที่นี้สำหรับสมาชิกเท่านั้น');window.location.href = 'http://localhost/mini_project/login.php';</script>";
		
}

?>