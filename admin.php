<?php
include_once("subject.php");
include_once("room.php");
include_once("user.php");
include_once("student.php");
include_once("teacher.php");
class admin extends user
{
    private $id ;
    private $name;
    private  $phone;
    private $addres;
    private $password;
    public $subject_object;//obj
    public $classobj;//obj
    public $student;//obj
    function setsubobj( $subject_object)
    {
       $this->subject_object= $subject_object;
    }
    function getsubobj()
    {
        return $this->subject_object;
    }
    function setclass( $classobj)
    {
       $this->sclassobj= $classobj;
    }
    function getclass()
    {
        return $this->classobj;
    }
    public function setid($id)
    {
        $this->id=$id;
    }
    public function getid($id)
    {
        return $this->id;
    }
    public function set_name($name)
    {
        $this->name=$name;
    }
    public function get_name($name)
    {
        return $this->name;
    }
    public function set_phone($phone)
    {
        $this->phone=$phone;
    }
    public function get_phone($phone)
    {
        return $this->phone;
    }
    public function set_addres($addres)
    {
        $this->addres=$addres;
    }
    public function get_addres($addres)
    {
        return $this->addres;
    }
    public function set_password($password)
    {
        $this->password=$password;
    }
    public function get_password($password)
    {
        return $this->password;
    }

    public function login()
    {

    }
    public function logout()
    {

    }
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
 
  