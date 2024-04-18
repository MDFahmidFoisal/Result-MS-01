<?php 
include 'Connect.php';
if(isset($_POST ['submit']))
{
    $ID=$_POST['id'];
    $Name=$_POST['name'];
    $Reg_Number=$_POST['reg_number'];
    $Great=$_POST['great'];
    $GPA=$_POST['gpa'];

    $sql="insert into Result (id,name,reg_number,great,gpa) values($ID,'$Name',$Reg_Number,'$Great',$GPA)";
    
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data Insert successfully";
        header('location:Display.php');
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
            <label>ID</label>
            <input type="text" class="form-control" placeholder="Enter your ID" name="id" autocomplete="off">
        </div>
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


        <div class="form-group my-5"><button type="submit" class="btn btn-primary" name="submit"> Submit</button> </div>
    </form>

    </div>


   


  </body>
</html>