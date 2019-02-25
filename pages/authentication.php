<?php
include '../database/config.php';
$myusername = mysqli_real_escape_string($conn, $_POST['user']);
$mypassword = md5($_POST['login']);

$sql = "SELECT * FROM tbl_users WHERE user_id = '$myusername' AND login = '$mypassword' OR email = '$myusername' AND login = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    session_start();
	$_SESSION['login'] = true;
	$_SESSION['first_name'] = $row['first_name'];
	$_SESSION['last_name'] = $row['last_name'];
	$_SESSION['gender'] = $row['gender'];
	$_SESSION['dob'] = $row['dob'];
	$_SESSION['address'] = $row['address'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['department'] = $row['department'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['avatar'] = $row['avatar'];
	$_SESSION['myid'] = $row['user_id'];
	$_SESSION['mycategory'] = $row['category'];
	$accstat = $row['acc_stat'];
	if ($accstat == "0") {
	 header("location:../?rp=5732");	
	}else{
		$location = strtolower($row['role']);
	header("location:../$location/");	
	}

    }
} else {
    header("location:../?rp=0912");
}
$conn->close();

?>