<?php 
session_start();
if($_SESSION['status']!='admin')
{
		echo "<script>window.location.href = 'http://localhost/mini_project/php/logout_action.php';</script>";
}
?>