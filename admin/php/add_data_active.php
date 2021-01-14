<?php 
include('connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$public= $_POST['public'];
$text= $_POST['text'];
//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
$new_image_name =$name.".".$Logo;
$image_path ="../../user/img/product/";
$upload_path = $image_path.$new_image_name;
 $succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$sql ="INSERT INTO service (surgery,photo,sub_text,text,price) VALUES ('$name','$new_image_name','$public','$text','$price');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = 'http://localhost/mini_project/admin/show_data.php';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>