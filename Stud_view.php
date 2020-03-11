<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
    <a href = "Stud_add.php">Add</a>
    
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Email Address</th>

      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      foreach($records as $r) { 
         echo "<tr>
            <td>".$r->roll_no."</td>
            <td>".$r->name."</td>
            <td>".$r->c_num."</td>
            <td>".$r->email."</td>

            <td><a href ='".base_url()."index.php/stud/edit/".$r->roll_no."'>Update</a>
            <a href ='".base_url()."index.php/stud/delete/".$r->roll_no."'>Delete</a></td> 
            </tr>"; 
            } 
         ?>
  </tbody>
</table> 
</body>
</html>      