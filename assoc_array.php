<h1>Associative Array</h1>
<?php

/**
 * employees - salaries 
 * 
 * 
 * 
 */

 $employees = array(
     "John" => 20000,
     "Peter" =>40000,
     "Jane" => 60000
 );

 //dipplay
 echo $employees["John"];
 //display all the items within an assoc array
 //looop
 //foreach
 //
 $searchtearm = "Chris";
 foreach ($employees as $key => $value) {
     # code...
     echo "<br>";
     echo $key." earns a salary of Ksh ".$value;
    //  if($key == $searchtearm){
    //      echo "Found $key!";
    //      break;
    //  }else{
    //      echo "$searchtearm not found!";
    //  }

 }

?>