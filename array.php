<h1>Arrays</h1>
<?php
/**
 * Array - special type of variable stores multiple values
 * 
 * ages
 * names
 * 
 * creating an array
 * print to browser
 * - echo function
 * steps of an array
 * 1.create an array name
 * $array_name ->rules of variables applies
 * $ages = array();
 *
 * 2.Access the items within the array
 * how the values 
 * $x =10
 * echo $x
 * $x++;
 * 
 * 2 types
 * 1.indexed array
 * 
 * -partitions are numbered are numbered from 0 -->e
 * display 
 * $array[0]
 * 2.associative array
 */



 $ages = array(20,21,22,23,42,51,90,76,67);

 $names = array("John","Jane","Peter","Doe","Knaught");

 echo $ages[5];
 echo "<br>";
 echo $names[0];

 // 0,1,2,3,4,5  0-5
 //loops - 0 -5 

 $x = 0;
 while($x<=5){
    echo "<br>";
    echo $ages[$x];
    $x++;
 }

 //displays for loop
 /**
  * init counter $i=0;
  * test counter $i<=5;
  * increament $i++
  */
echo "<br>.....Ages.....<br>";
 for($i=0;$i<count($ages);$i++){
     echo $ages[$i];
     echo "<br>";
 }

 //$x =0

 //how do i know how many values are within an array?
 //count()

 echo count($ages);
//manipulations - determine 
 echo "<h3>YOB</h3>";
 $currentYear = 2021;
 $no = count($ages);

 for($i=0;$i<$no;$i++){
     $yob = $currentYear - $ages[$i];
     echo "Age ".$ages[$i]." was born in the year ".$yob."<hr>";
 }

?>