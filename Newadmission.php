<?php
include_once "Functions.php";
include_once "student.php";
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
$x=new student();
$x->FirstName=$FirstName;
    $x->LastName=$LastName;
    $x->PersonalEmail=$PersonalEmail;
    $x->MobileNumber=$MobileNumber;
    $x->Gender=$Gender;
    $x->add=$add;
    $x->City=$City;
    $x->Country=$Country;
    $x->Nationality=$Nationality;
    $x->FatherJob=$FatherJob;
    $x->MotherJob=$MotherJob;
    $x->Religion=$Religion;
    $x->BirthDay=$BirthDay;
    $x->BirthdayMonth=$BirthdayMonth;
    $x->BirthdayYear=$BirthdayYear;
    $x->Religion=$Religion;
    $x->FillAdmissionForm($x);

?>
