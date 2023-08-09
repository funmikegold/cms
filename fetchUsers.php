<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Table Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php
include('modules/db.php');
include('modules/user.php');

$user = new User;



?>
  <div class="container">
    <h2>FETCH ALL USERS</h2>
    <table class="table table-striped">
      <thead>
        <tr>
        <th>id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>img</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php


          $fetchAllusers = $user->fetchAllusers();
       while ($row = mysqli_fetch_assoc($fetchAllusers)) {
    // break loop in order to write html  
    
    ?> 
    <tr>

      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['password'] ?></td>
      <td><?php echo $row['email']?></td>
      <td><img src="uploads/<?php echo $row['img']; ?>" width="40px" alt="alt"></td>

      <td><a href="edituser.php?id=<?php  echo $row['id'] ?>" class="btn btn-primary">Edit</a></td>

      <td><a href="deleteUser.php?id=<?php  echo $row['id'] ?>" class="btn btn-primary">Delete</a></td>
    </tr>

      
       
         <?php  
          
      }


            ?>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
