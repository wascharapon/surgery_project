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
                     <li class="dropdown active">
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
                    <li ><a href="booking.php">จองคิว</a></li>
                    <li><a href="confirm.php">ยืนยันการจอง</a></li>
      
                            <li><a href="conntect.php">ติดต่อเรา</a></li>
                                   <li><a href="../login.php">ระบบสมาชิก</a></li>
                     <li><a href="php/logout_action.php">ออกจากระบบ</a></li>
                </ul>
              </div>
        </div>
    </nav>
</div>

<!---sliderend--->

<div class="container" style="margin-top:6%">

      <center><h1 style="background-color:#caeb52;border:1px #e7e7e7 solid; border-radius:15%; " class="padding-x">ศัลยกรรมเพื่อความงาม</h1> </center>
      <br>  <br>  
       
            <?php 
			$i=1;
    $rs_a = @mysqli_query($con,$sql);
	while ($bn = mysqli_fetch_array($rs_a))
	{	?> 
     		
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"  >
        <img style="border:1px solid #e7e7e7;" src="img/<?php echo $bn['photo']; ?>" width="95%" />
        
        <div style="background-color:#000;border:1px #e7e7e7 solid">
             <div style="background-color:#caeb52;border:1px #e7e7e7 solid">
            <h3 style="color:#FFF;" class="text" > <center> <?php echo $bn['surgery']; ?> </center></h4></div>
            <br>
            <small style="color:#FFF; font-size:16px" ><center><p>&nbsp;&nbsp;<label style="font-size:18">ราคา&nbsp;:&nbsp;</label><?php echo $bn['price']; ?>&nbsp;&nbsp;บาท</p></center></small>
            <small style="color:#FFF;font-size:14px;" ><a class="green"  href="show_detail.php?id=<?php echo $bn['id'];?>"><center>อ่านเพิ่มเติม</center></a></small>
                 <br>
		</div>
          <br>
        </div>
  
        
 <?php } ?>


    </div>



<div class="row" style="margin-top:5%">
<div class="container-fluid">       
</div>
</div>

<div id="push">
</div>




</div>
<!--slider2end--->

<div class="row">
    <div class="container-fluid background-green text-center padding-x margin-top">
        <a href="https://twitter.com/"><i class="fa fa-twitter lightgreen padding fontsize"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100017536093907/"><i class="fa fa-facebook lightgreen padding fontsize"></i></a>
        <a href="#"><i class="fa fa-dribbble lightgreen padding fontsize"></i></a>
        <a href="#"><i class="fa fa-flickr lightgreen padding fontsize"></i></a>
        <a href="#"><i class="fa fa-github lightgreen padding fontsize"></i></a>
    </div>
    </div>
    <div class="row">
    <div class="container-fluid background-black padding-10">

        <small><a class="padding lightblack" href="#">หน้าแรก</a>|</small>
        <small><a class="padding lightblack" href="#">เกี่ยวกับเรา</a>|</small>
        <small><a class="padding lightblack" href="#">ศัลยกรรม</a>|</small>
        <small><a class="padding lightblack" href="#">จองสินค้า</a>|</small>
        <small><a class="padding lightblack" href="#">ยืนยันการจอง</a>|</small>
        <small><a class="padding lightblack" href="#">ติดต่อเรา</a></small>


        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>