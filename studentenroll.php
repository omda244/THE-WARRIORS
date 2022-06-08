<?php
include_once"Courses.php";
include_once"student.php";
$c1=$_REQUEST["math106"];
$c2=$_REQUEST["Eng201"];
$c3=$_REQUEST["OOP"];
$c4=$_REQUEST["digitallogic"];
$c5=$_REQUEST["linearalgebra"];
$c = array($c1, $c2,$c3,$c4,$c5);
$stid=$_REQUEST["studentid"];


 $y=new Courses();

$y->studentid=$stid;



$y->enrollcourse($y,$c);





?>