<?php
include_once("date.php");
  class exam extends date
  {
      private $description;
      private $grade;
      private $duration;
     
    
     
      public function setgrade($grade)
      {
          $this->grade=$grade;
      }
      public function setdesciption($description)
      {
          $this->description=$description;
      }
      public function setduration($duration)
      {
          $this->duration=$duration;
      }
       public function getdescription()
      {
          return $this->description;
      }
      public function getgrade()
      {
          return $this->grade;
      }
      public function getduration()
      {
          return $this->duration;
      }
      
  }
?>