<style>
h1.padding-x{color:#FFF;
font-size:28px;
background-color:#caeb52;
border:1px #e7e7e7 solid; 
border-radius:15%; }
a{color:#9cbf23 !important;}
a.focus{background-color:#FFF !important;}
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
			$sql ="SELECT * FROM service";
			$rs = @mysqli_query($con,$sql);

			while ($row = mysqli_fetch_array($rs))
	{	  ?> 
                            <li><a href="show_detail.php?id=<?php echo $row['id'];?>"><?php echo $row['surgery'] ?></a></li>
                  
                          <?php  }   ?>
                    
                        </ul>
                        
                        
                        
                        
                        
                    </li>
                    <li><a href="booking.php">จองสินค้า</a></li>
                    <li><a href="confirm.php">ยืนยันการจอง</a></li>
      
                            <li class="active"><a href="conntect.php">ติดต่อเรา</a></li>
                                   <li><a href="../login.php">ระบบสมาชิก</a></li>
                     <li><a href="php/logout_action.php">ออกจากระบบ</a></li>
                </ul>
              </div>
        </div>
    </nav>
</div>

<!---sliderend--->

<div class="container" style="margin-top:6%">

      <center><h1 style="background-color:#caeb52;border:1px #e7e7e7 solid; border-radius:15%; " class="padding-x">ติอต่อเรา</h1> </center>
      <br>  <br>  
 <i class="fa fa-clock-o" style="font-size:18px;color:orange"><label style="color:#000000">&nbsp;โรงพยาบาลเลอลักษณ์ ศัลยกรรมตกแต่ง (สวยงามคลินิค) เลขที่ 11 ถ.นครอินทร์ ต.ตลาดขวัญ  อ.เมือง จ.นนทุบรี 11000 โทร: 02-888-2888 </label></i><br><br>
 <i class="fa fa-clock-o" style="font-size:18px;color:red"><label style="color:#000000">&nbsp;เลอลักษณ์ คลินิก ชั้น 2 โซน D ศูนย์การค้าเซ็นทรัลพลาซา เวสต์เกต (บางใหญ่) </label></i><br><br>
  <i class="fa fa-clock-o" style="font-size:18px;color:Green"><label style="color:#000000">&nbsp;เลอลักษณ์ คลินิก ชั้น 2 ศูนย์การค้าเซ็นทรัลพลาซา พระราม2</label></i><br><br>
 
 <i class="fa fa-clock-o" style="font-size:18px;color:pink"><label style="color:#000000">&nbsp;เบอร์โทรศัพท์ 02-888-2888, 086-603-0354, 089-771-1851 </label></i><br><br>
  <i class="fa fa-clock-o" style="font-size:18px;color:blue"><label style="color:#000000">&nbsp;panudda@gmail.com</label></i><br><br>
   <div style="margin-left:55%;opacity: 0.8;"><img src="img/contact/map.jpg" width="600px" height="400" /></div>
<div> </div>

<div class="row" style="margin-top:0%">
<div class="container-fluid">       
</div>
</div>

<div id="push">
</div>

</div>
<?php include'footer.php'; ?>