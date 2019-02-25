<?php
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

include '../includes/check_user.php';
include '../../database/config.php';

$sql = "UPDATE tbl_users SET avatar='$image' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {

$sql = "SELECT * FROM tbl_users WHERE user_id = '$myid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
     $_SESSION['avatar'] = $row['avatar'];
	 header("location:../profile.php?rp=7823");
    }
} else {
header("location:../logout.php");
}




} else {
   header("location:../profile.php?rp=1298");
}

$conn->close();

?>