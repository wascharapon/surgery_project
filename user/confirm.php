<?php include'php/check_action.php' ?>
<style>
h1.padding-x{color:#FFF;
font-size:28px;
background-color:#caeb52;
border:1px #e7e7e7 solid; 
border-radius:15%; }
a{color:#9cbf23 !important;}
a.focus{background-color:#FFF !important;}
table {
    border-collapse: collapse;
    width: 100%;
	height:150px;
}

th, td {
    text-align:center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #000;
    color: white;
}
a.btn btn-secondary{color:#FFF !important;}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mini_Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider2.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
<div class="row" ">
    <nav class="navbar navbar-default navbar-fixed-top text-center greenborder" style="background-color:black; height:10%"  >
        <div class="container-fluid" style="margin-top:0.50%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand padding-top padding-left" href="#"><img src="img/LOGO_a.png" width="155px" > </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="aboute.php">เกี่ยวกับเรา</a></li>
                     <li class="dropdown ">
                        <a  data-toggle="dropdown" href="show_item_all.php">ศัลยกรรม
                            <span class="caret"></span></a>
                            
                        <ul class="dropdown-menu">
                        <?php 
          			include'php/connect.php';
			$sql ="SELECT * FROM service ";
			$rs = @mysqli_query($con,$sql);

			while ($row = mysqli_fetch_array($rs))
	{	  ?> 
                            <li><a href="show_detail.php?id=<?php echo $row['id'];?>"><?php echo $row['surgery'] ?></a></li>
                  
                          <?php  }   ?>
                    
                        </ul>
                        
                    </li>
                    <li><a href="booking.php">จองคิว</a></li>
                    <li class="active"><a href="confirm.php">ยืนยันการจอง</a></li>
      
                            <li ><a href="conntect.php">ติดต่อเรา</a></li>
                                   <li><a href="../login.php">ระบบสมาชิก</a></li>
                     <li><a href="php/logout_action.php">ออกจากระบบ</a></li>
                </ul>
              </div>
        </div>
    </nav>
</div>

<!---sliderend--->

<div class="container" style="margin-top:6%">

      <center><h1 style="background-color:#caeb52;border:1px #e7e7e7 solid; border-radius:15%; " class="padding-x">ยืนยันการจอง</h1> </center>
      <br>  <br> 
 
      <table>
      
  <tr>

    <th style="text-align:center;">ลำดับ</th>
    <th style="text-align:center;">รหัสการจอง</th>
        <th style="text-align:center;">เวลา</th>
                <th style="text-align:center;">ราคา</th>
                    <th style="text-align:center;">สถานะ</th>
                                <th style="text-align:center;">ใบเสร็จการโอน</th>
                                
    <th style="text-align:center;">ยืนยันการจอง</th>
  
  </tr>
 		<?php	include'php/connect.php';
			$sql ="SELECT * FROM book WHERE id_booking=$_SESSION[id] && confirm_status ='No' ";
			$rs = @mysqli_query($con,$sql);

			while ($row = mysqli_fetch_array($rs))
	{	  ?> 
        <form action="php/confirm_action.php" method="post" enctype="multipart/form-data">
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['book_surgery'] ?></td>
    <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['price'] ?> บาท</td>  
      <td style="color:red;">รอการยืนยัน</td>  
        <td><input style="margin-left:90px" type="file" name="img_confirm" > </td>  
                <td> <button type="submit" style="width:120px;height:40px; background-color:#caeb52;color:#FFF;"><a >ตกลง</a></button> </td> 
                 <input type="hidden" name="book_surgery" value="<?php echo $row['book_surgery'] ?>">     
  </tr>
  <form>
<?php } ?>



</table>
       

<div> </div>

<div class="row" style="margin-top:25%">
<div class="container-fluid">       
</div>
</div>

<div id="push">
</div>

</div>
<?php include'footer.php'; ?>