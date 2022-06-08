<?php
include_once"admin.php";
include_once"admin.php";
$id=$_REQUEST["id"];
$role=$_REQUEST["role"];

$y=new admin();
$y->id=$id;
$y->role=$role;
$y->deleteUser($y);






   

?>