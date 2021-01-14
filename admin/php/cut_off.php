<?php
include'connect.php';
$book_surgery=$_POST['book_surgery'];

			$sql ="SELECT * FROM book WHERE book_surgery = $book_surgery";
			$rs = @mysqli_query($con,$sql);

			if ($row = mysqli_fetch_array($rs))
	{	
		  
		  
		  
		  	$sql ="UPDATE book SET confirm_status ='Active'
					WHERE id = '$row[id]'";

$query = mysqli_query($con,$sql);
	if($query) {
	  
		  	$sql_a ="UPDATE confirm SET status ='Active'
					WHERE book_surgery = '$book_surgery'";

$query_a = mysqli_query($con,$sql_a);
	if($query_a) {
		echo "<script>alert('ยืนยันสำเร็จ');window.location.href = 'http://localhost/mini_project/admin/confirm_book.php';</script>";
	}
	
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}		  	  
		  
	}
	
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}		  	  
		  
	
	
	
	}

	
	else
	{
			echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}
	
 ?>