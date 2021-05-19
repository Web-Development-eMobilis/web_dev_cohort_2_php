<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

<?php
    //include('navbar.php');
?>
<div class="alert alert-primary" role="alert">
  <center>School Sigma</center>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        <img src="https://www.championtutor.com/blog/wp-content/uploads/2020/03/good-secondary-school.jpg" alt="">
        </div>

        <div class="col">
        <form style="margin-top:50px;" method="POST">
        <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Full Name</label>
                <input name="name" type="name" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input name="phone" type="phone" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
        
            <button name="register" type="submit" class="btn btn-primary">Register</button>

            <p>
            Already have an account? <a href="login.php">Login</a> Now
            </p>
            </form>
        
        </div>
    </div>

    
<?php

require('dbConnect.php');

if(isset($_POST['register'])){
    //capture the data
    $fullName = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //hash our password
    //password_hash 
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

     //insert
     $sql = "INSERT INTO `users`(`full_name`, `phone`, `email`, `password`) VALUES (?,?,?,?)";
     //insert - SQL INJECTION
     //check valid of the query
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
         //bind param
         mysqli_stmt_bind_param($stmt,'ssss',$param_name,$param_phone,$param_email,$param_password);
         //bind
         $param_name = $fullName;
         $param_phone = $phone;
         $param_email = $email;
         $param_password = $hashed_password;

         //excute the query
         if(mysqli_stmt_execute($stmt)){
             echo "User $fullName registered successfully!";

             //redirect to show students .php
             //header
             header('location:login.php');
         }else{
            echo "User $fullName not registered.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong with the query".mysqli_error($conn);
     }

}

?>
</div>
    
</body>
</html>