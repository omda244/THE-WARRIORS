<?php



include_once "Userfnc.php";
class admin 
{
   public $id ;
   public $name;
   public  $phone;
   public $addres;
   public $password;
   public $role;
   public$course;//obj
   public$classobj;//obj
   public$student;//obj
    

    public function login()
    {
        
    }
    public function logout()
    {

    }
  
    public function deleteUser($pnn)
    {
        $this->id=$pnn->id;
        $this->role=$pnn->role;
        
        
        DeleteUser($this->id , $this->role);
        echo "<script>      alert('The user has been deleted succesfully');     window.location.href='Admininterface.html';     </script>";


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
 
  