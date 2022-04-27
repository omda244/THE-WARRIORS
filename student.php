<?php
include_once("User1");
include_once("Exam.php");
class student extends User1
{
    public function FillAdmissionForm()
    {}
    public function ViewResult($id)
    {}
    public function ViewSchedule($id)
    {}
    public function ViewAttendence($id)
    {}
   public $solveexams_object=new Exam;
}

?>