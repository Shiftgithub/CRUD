<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>

   <?php require_once 'connect.php'?>

  <form action="" method="POST" >
            <div class="row">
                  <div class="col-md-4">
                        <label for=>Roll No.</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="roll_no" value="" id="roll_no"  />
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                        <label for="name">Name</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="name" value="" id="name"  />
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                        <label for="email">Email</label> 
                  </div>
                  <div class="col-md-8">
                        <input type="text" class="form-control" name="email" value="" id="email"  />
                  </div>
            </div>
            
            <div class="card-footer">
        <div class="row">
          <div class="col-12">
            <button type="submit" name="save" value="yes" class="btn btn-success float-right">Submit Form
            </button>
          </div>
        </div>
      </div>
      </form>
      </div>
      
</body>
</html>	<div class="container my-5">
      