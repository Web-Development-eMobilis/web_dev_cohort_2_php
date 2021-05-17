<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<h1>Form</h1>
<div class="container">

<div class="col-6">

<!-- 
 Form - user provides 
 Capture PHP

 Form tag - 
  1. attributes
  method = Values - POST
                    -GET
        - send - publicily - visible - through the URL
        POST 
        - login 
  action
  - destination - ""
  -hello.php

  modification in the input
  name attribute


 -->

<form method="GET" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="my_name">
    <div id="emailHelp" class="form-text">Just your first name.</div>
  </div>
 
 
  <button type="submit" name="btnSayHello" class="btn btn-primary">Say Hello</button>
</form>

<?php

/**
 * capture information
 * data from form 
 * -name
 * every form 
 * - assoc
 * "key":"value"
 * "attribute"
 * - dependend on method
 * POST -> creates an assoc array $_POST
 * GET -> $_GET
 * 
 */

 //get value that 

 if(isset($_GET['btnSayHello'])){
    $name = $_GET['my_name'];

    //isset
   
   
    echo"<hr>";
    echo "Good morning ".$name;
 }



?>

</div>

</div>
    
</body>
</html>

<?php

/**
 * Forms provides a way we get data from the user
 * Apart from display data using other 
 * 
 */

?>