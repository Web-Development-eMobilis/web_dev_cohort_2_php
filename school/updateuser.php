<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School | Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<?php
    include('navbar.php');

    //capture the admission number
    //
    $user_id = $_GET['id'];
    //fetch the records 
    //require
    require('dbConnect.php');
    $sql = "SELECT * FROM users WHERE id=".$user_id;
    //execute
    $result = mysqli_query($conn,$sql);

    if($result){
        //get values
        $row = mysqli_fetch_assoc($result);
    }else{
        echo "<h3>No users available</h3>";
    }
?>

<div class="container">

<div class="row">
    <div class="col">
    <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="">
    </div>

    <div class="col">
    <form method="POST" action="">

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="full_name" value="<?php echo($row['full_name']) ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="text" name="phone" required class="form-control" value="<?php echo($row['phone']) ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1"
            value="<?php echo($row['email']) ?>" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
           
            <label for="exampleInputEmail1" class="form-label">Current Role: <?php echo($row['role']) ?></label>
            <select class="form-select" name="role" aria-label="Default select example">
                <option selected>Update Role</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="admin">Admin</option>
                </select>
        </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Id</label>
            <input type="number" name="id" disabled  value="<?php echo($row['id']) ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>

<?php

require('dbConnect.php');

if(isset($_POST['submit'])){
    //capture the data
    $fullName = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
   // $admissionNumber = $_POST['admission_number'];

    //cpature
    //save to the database?
    
    /**
     * connection-
     * go database operation
     * insert
     * read 
     * 
     * 
     */

     //insert
     $sql = "UPDATE `users` SET `full_name`=?,`phone`=?,`email`=?,`role`=? WHERE id=".$user_id;
     //insert - SQL INJECTION
     //check valid of the query
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
         //bind param
         mysqli_stmt_bind_param($stmt,'ssss',$param_name,$param_phone,$param_email,$param_role);
         //bind
         $param_name = $fullName;
         $param_phone = $phone;
         $param_email = $email;
         $param_role = $role;

         //excute the query
         if(mysqli_stmt_execute($stmt)){
             echo "User $fullName updated successfully!";

             //redirect to show students .php
             //header
             header('location:showusers.php');
         }else{
            echo "User $fullName not updated.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong with the query".mysqli_error($conn);
     }

}

?>

</div>

    
</body>
</html>s