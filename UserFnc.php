<?php
include "Functions.php";
$fileName="UsersFile.txt";
$fileName2="studentenrollment.txt";
function DeleteUser($id ,$role)
{
	global $fileName;
	$r=getRowfordelete($fileName,"~",$id,$role);
	DeleteRecord($fileName,$r);
}
function UpdateUser($id,$Email,$Password,$FullName,$day,$month,$year,$role)
{
	global $fileName;
	$record=$id."~".$Email."~".$Password."~".$FullName."~".$day."~".$month."~".$year."~".$role."~"."\r\n";
	$r=getRowById($fileName,"~",$id);
	//echo $record ."NEW <br>";
	//echo $r ."NEW <br>";
	UpdateRecord($fileName,$record,$r);
	
}
function getUserById($Id)
{
	global $fileName;
	$Record=getRowById($fileName,"~",$Id);
	
	$ArrayResult=explode("~",$Record);
	$Result['id']=$ArrayResult[0];
	$Result['Email']=$ArrayResult[1];
	$Result['Password']=$ArrayResult[2];
	$Result['FullName']=$ArrayResult[3];
	$Result['BirthDay']=$ArrayResult[4];
	$Result['BirthdayMonth']=$ArrayResult[5];
	$Result['BirthdayYear']=$ArrayResult[6];
	$Result['role']=$ArrayResult[7];


	return $Result;
}
function getAllUsers()
{
	global $fileName;
	$R=ListAll($fileName);
	return $R;
}

function Login ($Email,$Password,$role)
{
	$Separator="~";
	global $fileName;
	if (checklogin($fileName,$Email,$Separator,$Password,$role))
	{
		return true;
	}
	else{
		return false;
	}
}
function addUser($Email,$Password,$FullName,$day,$month,$year,$role)
{
global $fileName;
$id=getLastId($fileName,"~")+1;
$record=$id."~".$Email."~".$Password."~".$FullName."~".$day."~".$month."~".$year."~".$role."~";
if (searchUser($fileName,$Email)==FALSE)
{
StoreRecord( $fileName,$record);	
return true;
}
else
{
	return FALSE;
}


}

function addenrollment($stdid,$cr)
{
global $fileName2;

$c1=$cr[0];
$c2=$cr[1];
$c3=$cr[2];
$c4=$cr[3];
$c5=$cr[4];
$id=getLastId($fileName2,"~")+1;

	
		$record=$id."~".$c1."~".$c2."~".$c3."~".$c4."~".$c5."~";
	
	


if (searchUserbyid($fileName2,$stdid)==FALSE)
{
StoreRecord( $fileName2,$record);	
return true;
}
else
{
	return FALSE;
}


}



?>