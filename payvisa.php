<?php
require_once"ipay.php";
class payvisa implements ipay
{
    public function pay()
    { 
      echo"pay by visa";
    }

}

?>