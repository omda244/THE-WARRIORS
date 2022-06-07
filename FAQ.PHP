<?php
include_once("UserFnc.php");
$fileName="FAQRECORD.txt";
$Separator="~";
$id=getLastId($fileName,"$Separator")+1;
$Name=$_REQUEST["Name"];
$Email=$_REQUEST["Email"];
$Message=$_REQUEST["Message"];
$record=$id."~".$Name."~".$Email."~".$Message."~";
StoreRecord($fileName,$record);
echo "<script>
	alert('Your Question Is Noted Ty <3');
	window.location.href='index.html';
	</script>";

?>