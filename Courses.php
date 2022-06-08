<?php
include_once"student.php";
include_once"UserFnc.php";
class Courses 
{
   public  $studentid;

public array $csname;
public $csid;
    public function enrollcourse($pnn,$csname)
    {
        $this->studentid=$pnn->studentid;
        for($i=0;$i<sizeof($csname);$i++)
        {
            $this->csname[$i]=$csname[$i];
        }
        /*for($i=0;$i<sizeof($csname);$i++)
        {
            echo $this->csname[$i];
            echo"<br>";
        }*/

        addenrollment( $this->studentid,$this->csname);

    }
    
}
?>