<?php 
include 'Connect.php';
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];

    $sql="delete from Result where id=$ID";
    $result=mysqli_query($con,$sql);
    if($result){
       header('location:Display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>