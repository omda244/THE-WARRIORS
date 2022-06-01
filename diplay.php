<?php


include 'connect.php';
?>




<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
       <div class="container">

<button class="btn btn-primary my-5" > <a href="user.php" class="text-light" > add user</a> </button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">id</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  
  
  <tbody>

  <?php
$sql="SELECT * FROM crud ";
$result=mysqli_query($con,$sql);
if($result)
{
    
 
 while($row=mysqli_fetch_assoc($result))
 {

     $name=$row['name'];
     $id=$row['id'];
     $address=$row['address'];
     $phone=$row['phone'];
     $password=$row['password'];
     echo ' <tr>
     <th scope="row">'.$name.'</th>
     <td>'.$id.'</td>
     <td>'.$address.'</td>
     <td>'.$phone.'</td>
     <td>'.$password.'</td>
     <td> 
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light"> Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.' "class="text-light"> Delete</a>    </button>
</td>
   </tr>';
 }


}
else{
    die(mysqli_error($con));
}


 ?>

  </tbody>

</table>
       </div>
       
    </body> 
</html>