<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<h1>Calculator</h1>
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

<form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Value</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1">
    <div id="emailHelp" class="form-text">First Value</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Second Value</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num2">
    <div id="emailHelp" class="form-text">Second Value</div>
  </div>

  <div class="mb-3">
  <select name="operation" class="form-select" aria-label="Default select example">
  <option selected>Select Operation</option>
  <option value="+">Addition</option>
  <option value="-">Substraction</option>
  <option value="/">Division</option>
  <option value="*">Multiplication</option>
</select>
  </div>
 
 
  <button type="submit" name="calc" class="btn btn-primary">Calculate</button>
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

 if(isset($_POST['calc'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = 0;

    $operation = $_POST['operation'];

    if($operation=='+'){
        //addition
        $result = $num1+$num2;
    }else if($operation=='-'){
        //substraction
        $result = $num1-$num2;
    }else if($operation == '*'){
        //multiplation
        $result = $num1*$num2;
    }else{
        //divison
        if($num2==0){
            $result = "You cannot divide $num1 by zero!!</br>";
        }else{
            $result = $num1/$num2;
        }
        
    }

    //echo $operation;

    echo "<h3>The Result of $num1 $operation $num2 is <u>$result</u></h3>";
  
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