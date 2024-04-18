<?php 
include 'Connect.php';
if(isset($_POST ['submit']))
$ID=$_GET['updateid'];
{
   
    $Name=$_POST['name'];
    $Reg_Number=$_POST['reg_number'];
    $Great=$_POST['great'];
    $GPA=$_POST['gpa'];

    $sql="update Result set name='$Name',reg_number='$Reg_Number',great='$Great',gpa='$GPA'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data Update successfully";
        //header('location:Display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Result operation</title>
  </head>
  <body>
    <div class="container my-5 row col-md-6 col-md-offset-3" >
    <form method="POST">
        
        
        <div class="form-group">
            <label>NAME</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Reg_Number</label>
            <input type="text" class="form-control" placeholder="Enter your Reg_Number" name="reg_number" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Great</label>
            <input type="text" class="form-control" placeholder="Enter your Great" name="great" autocomplete="off">
        </div>
        <div class="form-group">
            <label>GPA</label>
            <input type="text" class="form-control" placeholder="Enter your GPA" name="gpa" autocomplete="off">
        </div>


        <div class="form-group my-5"><button type="submit" class="btn btn-primary" name="submit">Update</button> </div>
    </form>

    </div>


   


  </body>
</html>