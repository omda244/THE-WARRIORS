<?php
include_once"ipay.php";
class paycash implements ipay
{
 public function pay()
 {
    echo"pay by cash";
 }
}
?>