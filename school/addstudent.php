<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School | Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<?php
    include('navbar.php');
?>

<div class="container">

<div class="row">
    <div class="col">
    <img src="https://www.indiaeducation.net/imagesvr_ce/3528/pop.png" alt="">
    </div>

    <div class="col">
    <form method="POST" action="">

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="full_name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="text" name="phone" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Admission Number</label>
            <input type="number" name="admission_number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    $admissionNumber = $_POST['admission_number'];

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
     $sql = "INSERT INTO `students`(`name`, `phone`, `email`, `admission_number`) VALUES (?,?,?,?)";
     //insert - SQL INJECTION
     //check valid of the query
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
         //bind param
         mysqli_stmt_bind_param($stmt,'siss',$param_name,$param_phone,$param_email,$param_admission);
         //bind
         $param_name = $fullName;
         $param_phone = $phone;
         $param_email = $email;
         $param_admission = $admissionNumber;

         //excute the query
         if(mysqli_stmt_execute($stmt)){
             echo "Student $fullName submitted successfully!";

             //redirect to show students .php
             //header
             header('location:showstudents.php');
         }else{
            echo "Student $fullName not submitted.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong with the query".mysqli_error($conn);
     }

}

?>

</div>

    
</body>
</html>