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
<div class="row">
    <nav class="navbar navbar-default navbar-fixed-top text-center greenborder" style=" height:10%">
        <div class="container-fluid"style="margin-top:0.50%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand padding-top padding-left" href="#"><img src="img/LOGO.png" width="155px" > </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="#">หน้าแรก</a></li>
                    <li><a href="aboute.php">เกี่ยวกับเรา</a></li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" href="show_item_all.php">ศัลยกรรม
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
                    <li><a href="booking.php">จองคิว</a></li>
                     <li><a href="confirm.php">ยืนยันการจอง</a></li>
                      <li><a href="../login.php">ระบบสมาชิก</a></li>
                     <li><a href="php/logout_action.php">ออกจากระบบ</a></li>
                </ul>
              </div>
        </div>
    </nav>
</div>


<div class="row">
<div class="container-fluid">

             <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                         <img src="img/product/slide1.png" width="100%" alt="Second slide">
                    </div>
                   <div class="item">
  					  <img src="img/product/slide.png" width="100%" alt="Second slide">
                    </div>
               
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                 href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                    </span>
            </a>


            </div>

    </div>
</div>
</div>

<div id="push">
</div>


<!--slider2--->
<div class="container margin-top">

    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
        <h1 >
            ศัลยกรรมเพื่อความงาม</h3>
    </div>
    <div class="container">
    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
        <!-- Controls -->
        <div class="controls pull-right">
            <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
               data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                        data-slide="next"></a>
        </div>
    </div>
</div>

<div id="carousel-example" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->

<div class="carousel-inner">
<div class="item active">
    <div class="row">
    <?php 
    $rs_a = @mysqli_query($con,$sql);
	while ($bn = mysqli_fetch_array($rs_a))
	{	  ?> 
        <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 margin-top">
            <div class="col-item">
                <div class="photo">
                    <img src="img/<?php echo $bn['photo']; ?>" class="img-responsive" alt="a" />
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5>   <?php echo $bn['surgery']; ?></h5>
                            <h5 class="price-text-color">
                                </h5>
                        </div>
                        <div class="rating hidden-sm col-md-6">
                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">  </i><i class="price-text-color fa fa-star">  </i>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <small><p><?php echo $bn['sub_text']; ?></p></small>
                        <br>
                        <button type="button" class="btn btn-primary" ><a style="color:#FFF" href="show_detail.php?id=<?php echo $bn['id'];?>">ดูรายละเอียด</a></button>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div> 
 <?php } ?>
    </div>
</div>
</div>
</div>
</div>

<!--slider2end--->

<?php include'footer.php'; ?>