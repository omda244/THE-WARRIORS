<html>


<?php
include "Userfnc.php";
$id=$_REQUEST["id"];
$role=$_REQUEST["role"];

DeleteUser($id , $role);
echo"$role";
//header("Location: UsersFile.txt?Msg=Record $id and $role were Deleted sucessfully");	


?>
</html>