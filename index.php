<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container display-4">
		<span>Add Students</span>
	</div>

   <?php require_once 'connect.php'?>

  <?php if(isset($_SESSION['message'])): ?>
  <div class="container alert alert-<?= $_SESSION['msg_type']?>">
    
    <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
  <?php endif ?>

  <form action="" method="GET"  class="container">
            <div class="row form-group">
                  <div class="col-md-4">
                        <label for="roll_no">Roll No.</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="roll_no" value="<?php echo $edit_roll_no; ?>" id="roll_no"  />
                  </div>
            </div>
            <div class="row form-group">
                  <div class="col-md-4">
                        <label for="name">Name</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="name" value="<?php echo $edit_name; ?>" id="name"  />
                  </div>
            </div>
            <div class="row form-group">
                  <div class="col-md-4">
                        <label for="email">Email</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="email" value="<?php echo $edit_email; ?>" id="email"  />
                  </div>
            </div>
            
            <div class="card-footer">
        <div class="row form-group">
          <div class="col-12">

            <?php if($update == true):?>
              <button type="submit" name="update" value="yes" class="btn btn-info float-right">Update ID</button>
            <?php else: ?>
              <button type="submit" name="save" value="yes" class="btn btn-success float-right">Submit Form</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </form>

        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stud";
          $mysql = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

          $result = $mysql->query("SELECT * FROM stud") or die($mysql->error());
        ?>


      <div class="container justify-content-center">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Roll No</th>
              <th>Name</th>
              <th>Email</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row["roll_no"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td>
                <a href="index.php?edit=<?= $row["roll_no"]; ?>" class="btn btn-info">Edit</a>
              </td>
              <td>
                <a href="index.php?delete=<?= $row['roll_no']; ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>

      <?php ?>

      

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
      