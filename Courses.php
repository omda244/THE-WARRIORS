<?php
class Courses 
{
    public admin $id;
public array $csname;
public $csid;
    public function enrollcourse($pnn,$csname)
    {
        $this->id=$pnn->stid;
        for($i=0;$i<sizeof($csname);$i++)
        {
            $this->csname[$i]=$csname[$i];
        }
        for($i=0;$i<sizeof($csname);$i++)
        {
            echo $this->csname[$i];
        }
    }
    
}
?>