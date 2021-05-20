<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School | Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<?php
    include('navbar.php');
    if($_SESSION['role']!='admin' ){
      //denied
      header('location:accessdenied.php');
  }
?>

<?php
//fetch the students details from 

//connection to the db
require('dbConnect.php');

//query to fetch
$sql = "SELECT * FROM `users` ORDER BY id DESC";
//excute the query

$result = mysqli_query($conn,$sql);

//check if the results exist
$numrows = mysqli_num_rows($result);


?>

<div class="container">

    <div class="row">

        <div class="col">
        <h1>Users</h1>

        <table class="table">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>

  <?php
  if($numrows>0){
      //get the results
      //get the results an acco
      while($row = mysqli_fetch_assoc($result)){
        //echo $row['name'].$row['phone'];
        echo "<tr>";
            echo "<td>".$row['full_name']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['role']."</td>";
            $id = $row['id'];
            if($_SESSION['role']=='admin'){
              echo "<td>
              <a href='updateuser.php?id=$id' class='btn btn-primary'>Update</a>
              <form method='POST' action='deleteUser.php' style='margin-top:5px;'>
              <input type='hidden' name='adm' value='$id'/>
              <button type='' name='submit' class='btn btn-danger'>DELETE</button>
              </form>
              </td>";
             
          }
           
        echo "</tr>";
      }

  }else{
      echo "<h3>No students available</h3>";
  }

  ?>
   
    
  </tbody>
</table>
        
        </div>
    
    </div>

</div>


    
</body>
</html>