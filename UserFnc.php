<?php
include "Functions.php";
$fileName="UsersFile.txt";
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

function getAllUsersByKeyWord($KeyWord)
{
	global $fileName;
	$R=SearhKeyword($fileName,$KeyWord);
	//echo $R[0] ."Ayman";
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

?>