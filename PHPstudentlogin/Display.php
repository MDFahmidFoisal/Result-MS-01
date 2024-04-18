<?php
include 'Connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="Result.php" class="text-light">Add user</a>
        </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Reg_Number</th>
      <th scope="col">Great</th>
      <th scope="col">GPA</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="select * from Result";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $ID=$row['ID'];
            $Name=$row['Name'];
            $Reg_Number=$row['Reg_Number'];
            $Great=$row['Great'];
            $GPA=$row['GPA'];

            echo ' <tr>
            <th scope="row">'.$ID.'</th>
            <td>'.$Name.'</td>
            <td>'.$Reg_Number.'</td>
            <td>'.$Great.'</td>
            <td>'.$GPA.'</td>

            <td>
                <button class="btn btn-primary"><a href="Update.php?updateid='.$ID.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="Delete.php?deleteid='.$ID.'" class="text-light">Delete</a></button>

             </td>
           

        
          </tr>';

        }
    }

    ?>


             
  </tbody>
</table>
    </div>
    
</body>
</html>