<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- !-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-12 my-5">
    <a href="index.php" class="btn btn-primary">Add Category</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>


      <?php

      $sql = "SELECT * FROM IMG";

      $sql_run = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($sql_run)) {



        echo "  <tr>
      
      <td>
      $row[id]
      
      </td>
      <td>
      $row[name]
       
      </td>
      <td>
      $row[price]

      </td>
      
      <td>
      <img src='$row[image]' width='50px' height='50px'> 
     
      
      </td>
      

      
      <td>

      
      <a href='delete.php?id= $row[id]' class='btn btn-sm btn-danger'>Delete</a>
      <a href='update_data.php?id= $row[id]' class='btn btn-sm btn-primary'>Update</a>
     
  
      </td>
      
      


    </tr>";
      }
       ?>
      

    </tbody>
  </table>


    </div>
  </div>
</div>

</body>

</html>