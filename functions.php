
<h1>Functions</h1>

<?php
/**
 * Functions - block of code - together perform 
 * a specific
 * function FunctionName(){
 *  block
 * 
 * }
 * 
 * 
 */

 //create a functon - to say hello

 function sayHello(){
     //define - body
     echo "Hello world! From a function<br>";
 }

 //creatting function - invoke execute - call to you call 

 //functionName();

 sayHello(); //called function

 //sayHello();
 //sayHello();

 function sayMyName($name){
     echo "Hi, $name<br>";
 }

 function addNumbers($x,$y){
    //  $x = 10;
    //  $y = 20;
     $sum = $x+$y;
     echo "Sum of $x and $y is $sum<br>";
 }

 sayMyName("John Doe");


 echo "<h4>Add two Numbers</h4>";

addNumbers(190,50);

//create a function that will accept an array of of marks then find its average mark:

function findAverageMark($marks){
    //find sum of all the marks
    //find the number - count
    //divide the sum by number
    //find 
    $no = count($marks);
    //find the sum 
    $sum = 0;
    //loop the array
    for($i=0;$i<$no;$i++){
        $sum+=$marks[$i];
    }
    $average  = $sum/$no;
    //print out the sum 
    echo "<h4>Sum of Marks is: $sum</4>";
    //print average
    echo "<h4>Average Mark is: $average</4>";

}
echo "<h4>Average mark</h4>";

$mymarks = array(67,89,76,75,95,63);

findAverageMark($mymarks);

?>