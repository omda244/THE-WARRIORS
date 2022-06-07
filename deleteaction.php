<?php
include "Userfnc.php";
$id=$_REQUEST["id"];
$role=$_REQUEST["role"];

DeleteUser($id , $role);


    echo "<script>
	alert('The User Deleted Succesfully');
	window.location.href='Admininterface.html';
	</script>";

?>