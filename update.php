<?php
include_once("UserFnc.php");
$id=$_REQUEST["id"];
$modify=getUserById($id);
    $modify[0]=$_REQUEST["id"];
    $modify[1]=$_REQUEST["email"];
    $modify[2]=$_REQUEST["password"];
    $modify[3]=$_REQUEST["fullname"];
    $modify[4]=$_REQUEST["BirthDay"];
    $modify[5]=$_REQUEST["BirthdayMonth"];
    $modify[6]=$_REQUEST["BirthdayYear"];
    $modify[7]=$_REQUEST["role"];
    UpdateUser( $modify[0], $modify[1], $modify[2], $modify[3], $modify[4], $modify[5], $modify[6], $modify[7]);
    echo "<script>
	alert('The Record Has Been Updated Succesfully');
	window.location.href='Admininterface.html';
	</script>";
?>


