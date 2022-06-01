<?php


class subjects implements idisp{
private $subjectname;
private $subjectid;
    public function display()
    {
        
    }
    function setsubname($subjectname)
    {
       $this->subjectname = $subjectname;
       return $this;
   }
   function getsubname() {
       return $this->subjectname;
   }
   function setid($subjectid)
   {
      $this->subjectid = $subjectid;
      return $this;
  }
  function getid() {
      return $this->subjectid;
  }
}










?>