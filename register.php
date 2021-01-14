<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body style="background-image:url(user/img/bg/bg_1.jpg)" >  <img style="position:absolute;margin-left:0%;border:3px #665851 solid;margin-top:80px;opacity:0.7; width:99.50%;height:80%" src="user/img/bg/bg.jpg">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"></h1>
		</div>
		<div class="login-box animated fadeInUp" >
			<div class="box-header">
				<h2>สมัครสมาชิก</h2>
                		<form class="form" action="php/register_action.php" method="post">
			</div>
               	<label for="name">ชื่อ-นามสกุล&nbsp;&nbsp;</label>
		
			<input type="text" id="name" name="name"><br>
			<label for="username">ชื่อผู้ใช้งาน&nbsp;&nbsp;&nbsp;</label>
		
			<input type="text" id="username" name="username"><br>
		
			<label for="password">รหัสผ่าน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	
			<input type="password" id="password" name="password"><br>
		
         
		
            	<label for="phone">เบอร์ติดต่อ&nbsp;&nbsp;</label>
	
			<input type="text" id="phone" name="phone"><br>
			<br/>
			<button style="width:120px;height:60px;font-size:18px" type="submit">ตกลง</button>
			<br/>
			<a  href="login.php"><p class="small" style="font-size:14px">Login</p></a>
            </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>