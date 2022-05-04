<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql = "update  crud set  name='$name' , id='$id', address='$address' ,phone='$phone', password='$password'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:diplay.php');
    } 
    else{
        die(mysqli_error($con));
    }
}

?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD OPRATION</title>
  </head>
  <body>
  <div class="container">

  
      <form method="post">
        <div >
      
    <label>NAME</label>
    <input type="text" class="form-control"
    placeholder="enter your name" name="name">
     </div>
                                <div>
                        <label>ID</label>
                        <input type="text" class="form-control"
                        placeholder="enter your id" name="id">
                    </div>
                                    <div>
                            <label>ADDRESS</label>
                            <input type="text" class="form-control"
                            placeholder="enter your address" name="address">
                            </div>
                    <div>
                    <label>PHONE</label>
                    <input type="text" class="form-control"
                    placeholder="enter your phone no" name="phone">
                    </div>
    <div>
    <label>password</label>
    <input type="password" class="form-control"
    placeholder="enter your password" name="password">
    </div>
  <button type="submit"  class="btn btn-primary" name="submit">update</button>
    </form>
</div>
  </body>
</html> 


