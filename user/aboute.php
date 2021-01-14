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
                    <li class="active"><a href="aboute.php">เกี่ยวกับเรา</a></li>
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
                    <li><a href="booking.php">จองคิว</a></li>
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

      <center><h1 style="background-color:#caeb52;border:1px #e7e7e7 solid; border-radius:15%; " class="padding-x">เกี่ยวกับเรา</h1></center>
      
  <div class="container margin-top" st>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="width:50%" >

            <h3>รายละเอียด</h3>

            <small style="font-size:14px"><p> V PLAST CLINIC นั้นถือกำเนิด และพัฒนาการจากคลีนิกเวชกรรมแพทย์วิระพันธ์ ซึ่งก่อตั้งมาเมื่อ 1 เมษายน 2544 มีทำเลที่ตั้งตรงข้ามมหาวิทยาลัยบูรพาบางแสนชลบุรีโดยมีจุดประสงค์ให้การรักษาทางด้านผิวพรรณและความงาม ด้วยอุดมการณ์อันแน่วแน่ที่จะพัฒนา และทำศัลยกรรมตกแต่งความงามโดยจะต้องมีความรู้ความเชี่ยวชาญทางด้านศัลยกรรมเป็นอย่างดี ก่อนจะลงมือทำทางด้านศัลยกรรมความงาม รอ.นพ.พิชาญศักดิ์ (วิระพันธ์) บุญมาศ ได้ศึกษาต่อเนื่องเป็นผู้เชี่ยวชาญด้านศัลยกรรมทั่วไป 4ปี และ ต่อยอดผู้เชี่ยวชาญด้านศัลยกรรมตกแต่งอีก 2 ปี นอกจากนี้ได้ศึกษาเพิ่มเติม ด้านศัลยกรรมตกแต่งในต่างประเทศอย่างต่อเนื่อง เช่น เกาหลี ใต้หวัน ญี่ปุ่น เพื่อให้มีการพัฒนาเทคนิคและวิธีการต่างๆเรื่อยๆมา </p></small>
               <small style="font-size:14px"><p>V PLAST CLINIC ไม่เพียงแค่ให้บริการศัลยกรรมตกแต่งความงามเท่านั้น แต่การดูแลทั้งก่อนและหลังผ่าตัด นั้นถือเป็นหัวใจสำคัญอย่างยิ่งที่จะดูแลท่านประดุจญาติมิตร ด้วยการคัดสรรค์เครื่องมือที่ได้มาตรฐาน ทันสมัย สะอาด ปลอดภัย ร่วมกับห้องผ่าตัดที่ได้มาตรฐาน ทีมศัลยแพทย์และวิสัญยีแพทย์ ตลอดจนบุคลากรที่มีความรู้ ความชำนาญ ที่จะทำให้ท่านได้พบกับจุดมุ่งหมายของคำว่า "ความสวยงามบนเรือนร่าง" อย่างแท้จริง V PLAST CLINIC ไม่หยุดยั้ง ที่จะพัฒนาเทคนิคการผ่าตัดศัลยกรรมตกแต่งความงาม ผิวพรรณ และ เลเซอร์ อยู่เสมอ เพื่อผลที่เป็นเลิศแก่ผู้ใช้บริการ โดยได้มาตรฐานไม่เป็นสองรองใครทั้งในและต่างประเทศ</p></small>
        
            </div>
       <br>
			<img src="img/aboute/1.webp"width="250px"height="200px"> 
        			<img src="img/aboute/2.webp"width="250px"height="200px"> 
                <img src="img/aboute/3.webp"width="250px"height="200px"> 
               <img src="img/aboute/4.webp"width="250px"height="200px">
    </div>
       
</div>
		
    </div>



<div class="row" style="margin-top:5%">
<div class="container-fluid" st>       
</div>
</div>

<div id="push">
</div>




</div>
<!--slider2end--->

<?php include'footer.php'; ?>