<?php
include '../includes/check_user.php';
include '../../database/config.php';

$new_password = md5($_POST['pass1']);

$sql = "UPDATE tbl_users SET login='$new_password' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {
	header("location:../profile.php?rp=7823");
} else {
   header("location:../profile.php?rp=1298");
}

$conn->close();
?>
