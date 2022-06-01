<?php


$con=new mysqli('localhost','root' ,'Me123456','crudopration');
if($con)
{
    echo "con succ";
}
else{
    die(mysqli_error($con));
}
?>