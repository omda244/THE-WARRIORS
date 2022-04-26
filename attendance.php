<?php
include_once "date.php";
class attendance extends date{
    private $date;

    public function checkattendance($id)
    {}
    public function viewattendance($id)
    {
    }

	function getDate() {
		return $this->date;
	}
	
	function setDate($date): self {
		$this->date = $date;
		return $this;
	}
}
?>