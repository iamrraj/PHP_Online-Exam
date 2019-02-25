<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	$myfname = $_SESSION['first_name'];
	$mylname = $_SESSION['last_name'];
	$mygender = $_SESSION['gender'];
	$mydob = $_SESSION['dob'];
	$myaddress = $_SESSION['address'];
	$myemail = $_SESSION['email'];
	$myphone = $_SESSION['phone'];
	$mydepartment = $_SESSION['department'];
	$myrole = $_SESSION['role'];
	$myavatar = $_SESSION['avatar'];
	$myid = $_SESSION['myid'];
	$mycategory = $_SESSION['mycategory'];
	if ($myrole == "student") {
		
	}else{
	header("location:../?rp=9122");	
	}
}else{
	header("location:../?rp=9422");
}

?>