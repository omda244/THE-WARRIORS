<?php
// do all file manipulations
function Encrypt($Word,$Key)
{
	$Result="";
	for ($i=0;$i<strlen($Word);$i++)
	{
		$c=chr(ord($Word[$i])+$Key+$i);
		$Result.=$c;
	}
	return $Result;
}
function Decrypt($Word,$Key)
{
	$Result="";
	for ($i=0;$i<strlen($Word);$i++)
	{
		$c=chr(ord($Word[$i])-$Key-$i);
		$Result.=$c;
	}
	return $Result;
}

function getRowById($fileName,$Separator,$id)
{
	
	if ( !file_exists($fileName) ) {
       return 0;
      }		
	
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
  		
  		if ($ArrayLine[0]==$id)
  		{
			return $line;	
		}
  		
	}
	return False;
}
function getRowfordelete($fileName,$Separator,$id,$role)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
  		
  		if ($ArrayLine[0]==$id && $ArrayLine[7]==$role )
  		{
			return $line;	
		}
  		
	}
	return False;
}


function getLastId($fileName,$Separator)
{
	
	if ( !file_exists($fileName) ) {
       return 0;
      }		
	
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
  		
  		if ($ArrayLine[0]!="")
  		{
		$LastId=$ArrayLine[0];	
		}
  		
	}
	return $LastId;
}
function UpdateRecord($fileName,$Newrecord,$OldRecord)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($OldRecord,$Newrecord, $contents);
	file_put_contents($fileName, $contents);
}

function DeleteRecord($fileName,$record)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($record, '', $contents);
	file_put_contents($fileName, $contents);
}

function StoreRecord($fileName,$record)
{
	$myfile = fopen($fileName, "a+");
	fwrite($myfile, $record."\r\n");
	fclose($myfile);
}


function checklogin($fileName,$Email,$Separator,$Password,$role)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
		  if($ArrayLine[0])
		  {
			  if ($ArrayLine[1]==$Email && $ArrayLine[2]==$Password && $ArrayLine[7]==$role) 
		  {
			
			return $line;
		  }
		  }
  		
	}
	fclose($myfile);	
	return FALSE;
}
function searchUser($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=strpos($line, $Search);
		
  		if ($i>=0 && $i !=null)
  		{
  			
			return $line;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}


function searchUserbyid($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=strpos($line, $Search);
		
  		if ($i>=0 && $i !=null)
  		{
  			
			return $line;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}

?>