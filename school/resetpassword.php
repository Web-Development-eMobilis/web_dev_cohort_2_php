<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
<div class="alert alert-primary" role="alert">
  <center>School Sigma</center>
</div>

<div class="container">
    <div>
    <center>
    <div class="card" style="width: 28rem;">
    <center>
    <img src="https://wpdoityourself.com/wp-content/uploads/2016/11/wordpress-administration-password-reset.png" style="width:50px;" class="card-img-top" alt="...">

    </center>
  <div class="card-body">
    <h5 class="card-title">Reset Password</h5>
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
  

    <?php
       use PHPMailer\PHPMailer\PHPMailer;
       use PHPMailer\PHPMailer\Exception;

    //
    if(isset($_POST['submit'])){
        //get the email
        $email = $_POST['email'];

        //
        require('dbConnect.php');
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
                    //email exists
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['full_name'];
                    $id = $row['id'];
                    $link ="http://localhost/sigma-class/school/resetpass.php?id=".$id;

                    $message = "Dear $name, <br>Click the link below<br>$link</br>To reset your password.";
                    
                    sendEMail($email,"Password Reset",$message);
                }else{
                    echo "<h3 style='color:red;'>Invalid email provided</h3>";
                }
            }
        }
    }
}

    function sendEMail($receipient,$subject,$message){
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        //
        $mypass="";
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'nixondeveloper@gmail.com';                     //SMTP username
            $mail->Password   = $mypass;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('nixondeveloper@gmail.com', 'Sigma School');
            $mail->addAddress($receipient, '');     //Add a recipient
        

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            

            $mail->send();
            echo 'Password reset sent to your email: $receipient';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }

    ?>
      </center>
    </div>
</div>
</body>
</html>