<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empoyees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

<?php
    $employess = array(
        "John Doe" => 30000,
        "Jane Peter" => 4000,
        "Peter James" => 50000,
        "Cliff Ezra" =>60000,
        "Susan Jane" =>4000
    )
?>
<div class="container">
    <div class="col-6">
    <h1>Employees Salary</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Salary</th>
      <th scope="col">Status</th>
      <th scope="col">Deduction</th>
    </tr>
  </thead>
  <tbody>

    <?php
        foreach ($employess as $name=>$salary) {
            # code...
            #echo "$name $salary<br>";
            echo "<tr>";
                echo "<td></td>";
                echo "<td>".$name."</td>";
                echo "<td>".$salary."</td>";
                if($salary>10000){
                    echo "<td class='bg-success'> Above Minimum</td>";
                    echo "<td>".($salary-5000)."</td>";
                }else{
                    echo "<td class='bg-warning'> Below Minimum</td>";
                    echo "<td>No Deduction</td>";
                }
                $percentage = ($salary-10000)/100;
                

                echo "<td>".$percentage."%</td>";
            echo "</tr>";
        }
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
   
 
  </tbody>
</table>
    
    </div>
</div>
    
</body>
</html>

<?php  

?>