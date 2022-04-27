<?php
include_once("subjects.php");
include_once("class.php");
include_once("user1.php");
include_once("student.php");
include_once("teacher.php");
class admin extends user1
{
    public $userone_obj=new user1();
    public $subjectobj=new subjects();
    public $classobj=new classes();
    public $studentobj=new student;
   
   public $teacherobj=new teacher();
    public function add_new_teacher()
    {

    }
    public function delete_teacher()
    {

    }
    
    public function add_new_student( )
    {

    }
    public function delete_student()
    {

    }
    public function add_new_subject()
    {

    }
    public function delete_subject()
    {

    }
    public function add_new_class()
    {

    }
    public function delete_class()
    {

    }
    public function registrate()
    {

    }
}

?>
 
  