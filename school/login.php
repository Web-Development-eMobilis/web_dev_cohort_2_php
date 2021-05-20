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
   // include('navbar.php');
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
        <form style="margin-top:70px;" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
        
            <button type="submit" name="login" class="btn btn-primary">Login</button>

            <p>
            Forgot Password ? <a href="resetpassword.php">Reset</a> Now
            </p>
            <p>
            Don't have an account? <a href="register.php">Register</a> Now
            </p>
            </form>
        
        </div>

        <?php

        require('dbConnect.php');

        if(isset($_POST['login'])){
            //capture the data
            $email = $_POST['email'];
            $password = $_POST['password'];

            //select from the user table - where the email -> 
            //get the password - verify
            $sql = "SELECT * FROM `users` WHERE `email` = ?";


            $stmt = mysqli_prepare($conn,$sql);
            if($stmt){
                //bind param
                mysqli_stmt_bind_param($stmt,'s',$param_email);
                //bind
                $param_email = $email;
       
                //excute the query
                if(mysqli_stmt_execute($stmt)){
                   //get the results
                   $result = mysqli_stmt_get_result($stmt);
                   if($result){
                    $numrows = mysqli_num_rows($result);
                    if($numrows>0){
                        //match
                        //fetch the records 
                        //verify the password
                        //successfully logined in

                        $row = mysqli_fetch_assoc($result);
                        $passwordHashedFromDb = $row['password'];
                        //verify the password
                        $verifyPassword = password_verify($password,$passwordHashedFromDb);
                        if($verifyPassword){
                            //logined successfulll
                            output("Welcome -- dear ".$row['full_name']);
                            //
                            header('location:index.php');
                            //session
                            //name
                            //id
                            session_start();
                            //set values
                            $_SESSION['name']=$row['full_name'];
                            $_SESSION['id']=$row['id'];
                            $_SESSION['role']=$row['role'];
                        }else{
                            output("Oops! Invalid email or password.Try again");
                        }

                       
    
                    }else{
                        //no
                        output("Invalid email address.Check and try again");
                    }
                }else{
                    output("Something went wrong".mysqli_error($conn));
                }

                }else{
                 output("Something went wrong ".mysqli_error($conn));
                }
       
       
            }else{
                output("Something wrong with the query".mysqli_error($conn));
            }
            
        }

        function output($message){
            echo"<h3>$message</h3>";
        }

        ?>
    </div>
</div>
    
</body>
</html>