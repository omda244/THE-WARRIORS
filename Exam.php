<?php
  class exam
  {
      private $examname;
      private $description;
      private $grade;
      private $duration;
      private $date;
     public function setexamname($examname)
     {
         $this->examname=$examname;
     }
     
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
      public function setdate($date)
      {
          $this->date=$date;
      }

      public function getexamname()
      {
          return $this->examname;
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
      public function getdate()
      {
          return $this->date;
      }
  }
?>