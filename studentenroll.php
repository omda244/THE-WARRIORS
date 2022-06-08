<?php
include_once"courses.php";
$c = array($c1=$_REQUEST["math106"], $c2=$_REQUEST["Eng201"],$c3=$_REQUEST["OOP"],$c4=$_REQUEST["digital logic"],$c5=$_REQUEST["linear algebra"]);
$stid=$_REQUEST["student id"];


 $y=new Courses();

$y->student=$stid;

    

//$y->enrollcourse($y,$c);
if (isset($_POST['submit'])) {
    if (!empty($_POST['math106'])) {
        foreach ($_POST['math106'] as $value) {
            echo "Chosen colour : ".$value.'<br/>';
        }
    }
}




?>