<?php 
include'connect.php';
session_start();
$id=$_GET['id'];
$result = $id+$_SESSION['id'];


            
          	
			$sql ="SELECT * FROM service WHERE id =$id";
			$rs = @mysqli_query($con,$sql);
			if($row = mysqli_fetch_array($rs))
	{	 
                      
               $price=$row['price'] ;  
 	}   
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}
         

$date= date("Y-m-d H:i:s");


$sql_a ="INSERT INTO book (book_surgery,confirm_status,id_booking,price,date) VALUES ('$result','NO','$_SESSION[id]','$price','$date')";
$query = mysqli_query($con,$sql_a);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/mini_project/user/confirm.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}



?>