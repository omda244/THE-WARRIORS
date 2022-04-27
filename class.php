<?php

class classes implements idisp 
{
    private $classname;
    private $classid;
    
    function display()
    {
        
    }

    function setname($classname)
     {
		$this->classname = $classname;
		return $this;
	}
	function getname() {
		return $this->classname;
	}
    function setic($classid)
     {
		$this->classid = $classid;
		return $this;
	}
	function getid() {
		return $this->classid;
	}

}











?>