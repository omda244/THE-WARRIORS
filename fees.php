<?php
include_once"ipay.php";
class fees 
{
    public $student;
    public $amount;
    public $type;
    public $description;
     public  $ipay;
     
    public function __construct(  $ipay)
    {
        $this->ipay=$ipay;
    
    }

     function paay()
    {
      return $this->ipay->pay();
    }
   

    
   
}

?>