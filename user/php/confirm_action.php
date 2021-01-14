<?php 
include('connect.php');
$book_surgery = $_POST['book_surgery'];
//upload image
$Logo = pathinfo(basename($_FILES['img_confirm']['name']),PATHINFO_EXTENSION);
$new_image_name =$book_surgery.".".$Logo;
$image_path ="../../user/img/comfirm/";
$upload_path = $image_path.$new_image_name;
 $succes=move_uploaded_file($_FILES['img_confirm']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$sql ="INSERT INTO confirm (book_surgery,photo) VALUES ('$book_surgery','$new_image_name');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('ยืนยันการจองสำเร็จ');window.location.href = 'http://localhost/mini_project/user/confirm.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>