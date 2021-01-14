<?php 
include'connect.php';
$ID= $_GET['id'];

	$sql="DELETE FROM service  WHERE ID = '$ID'";	
		 if($query = mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = 'http://localhost/Mini_project/admin/show_data.php';</script>";
		 }
	
?>