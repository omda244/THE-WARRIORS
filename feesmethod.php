
<?php
include_once"fees.php";
include_once"paycash.php";
include_once"payvisa.php";
 $fees=new fees(new paycash());
$res=$fees->paay();
echo($res);
echo"<br>";
$fees=new fees(new payvisa());
$res=$fees->paay();
echo($res);




?>


