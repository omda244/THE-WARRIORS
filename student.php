<?php
include_once("Exam.php");

class student
{
    public $FirstName;
    public $LastName;
   public $PersonalEmail;
   public $MobileNumber;
   public $Gender;
   public $add;
   public $City;
   public $Country;
   public $Nationality;
   public $Religion;
   public $FatherJob;
   public $MotherJob;
   public $BirthDay;
   public $BirthdayMonth;
   public $BirthdayYear;
   
   
    public function FillAdmissionForm($pnn)
    { 

    $this->FirstName=$pnn->FirstName;
    $this->LastName=$pnn->LastName;
    $this->PersonalEmail=$pnn->PersonalEmail;
    $this->MobileNumber=$pnn->MobileNumber;
    $this->Gender=$pnn->Gender;
    $this->add=$pnn->add;
    $this->City=$pnn->City;
    $this->Country=$pnn->Country;
    $this->Nationality=$pnn->Nationality;
    $this->FatherJob=$pnn->FatherJob;
    $this->MotherJob=$pnn->MotherJob;
    $this->Religion=$pnn->Religion;
    $this->BirthDay=$pnn->BirthDay;
    $this->BirthdayMonth=$pnn->BirthdayMonth;
    $this->BirthdayYear=$pnn->BirthdayYear;
    $this->Religion=$pnn->Religion;
    $Separator="~";
    $fileName="RecordAdmission.txt";
    $i=getLastId($fileName,"$Separator")+1;
    $record=$i."~".$this->FirstName."~".$this->LastName."~".$this->PersonalEmail."~".$this->MobileNumber."~".$this->Gender."~".$this->add."~".$this->City."~".$this->Country."~".$this->Nationality."~".$this->FatherJob."~".$this->MotherJob."~".$this->Religion."~".$this->BirthDay."-".$this->BirthdayMonth."-".$this->BirthdayYear."~";
    StoreRecord($fileName,$record);
    echo "<script> 
    alert('The Admission Order Successfully Sent');
    window.location.href='Studentinterface.html';
    </script>";

    }

    public function ViewResult($id)
    { 
            
    }
    public function ViewSchedule($id)
    {

    }
    public function ViewAttendence($id)
    {

    }
}

?>