<?php
include_once "Functions.php";
$add=$_REQUEST["Address"];
$FirstName=$_REQUEST["FirstName"];
$LastName=$_REQUEST["LastName"];
$PersonalEmail=$_REQUEST["PersonalEmail"];
$MobileNumber=$_REQUEST["MobileNumber"];
$Gender=$_REQUEST["Gender"];
$BirthDay=$_REQUEST["BirthDay"];
$BirthdayMonth=$_REQUEST["BirthdayMonth"];
$BirthdayYear=$_REQUEST["BirthdayYear"];
$City=$_REQUEST["City"];
$FatherJob=$_REQUEST["FatherJob"];
$MotherJob=$_REQUEST["MotherJob"];
$Country=$_REQUEST["Country"];
$Nationality=$_REQUEST["Nationality"];
$Religion=$_REQUEST["Religion"];
$Separator="~";
$fileName="RecordAdmission.txt";
$i=getLastId($fileName,"$Separator")+1;
$record=$i."~".$FirstName."~".$LastName."~".$PersonalEmail."~".$MobileNumber."~".$Gender."~".$add."~".$City."~".$Country."~".$Nationality."~".$Religion."~".$FatherJob."~".$MotherJob."~".$Religion."~".$BirthDay."-".$BirthdayMonth."-".$BirthdayYear;
StoreRecord($fileName,$record);
echo "<script>
alert('The Admission Order Successfully Sent');
window.location.href='Studentinterface.html';
</script>";
?>
