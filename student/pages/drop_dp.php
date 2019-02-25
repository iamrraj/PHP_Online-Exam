<?php
include '../includes/check_user.php';
include '../../database/config.php';

$sql = "UPDATE tbl_users SET avatar='' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['avatar'] = '';
	header("location:../profile.php?rp=7823");
} else {
   header("location:../profile.php?rp=1298");
}

$conn->close();
?>