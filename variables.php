<h1>PHP VARIABLES</h1>

<?php

/**
 * Variables
 * container - hold  info to be used later on
 * create
 * $ followed name
 * - rules 
 * - start a-z or _
 * -must never start number 1name
 * - first name first_name
 * 
 * 
 * save age and name of student john , 20
 * 
 * hold info
 * assignment
 *  
 */

 $age = 20;
 $name = "John";

 //whats container

 echo $age;
 echo "<br>";
 echo $name;

 /**
  *Create a PHP Script that will have 
  *Students name,marks math,science,
  *languages
  */
  $studentName = "Peter James";
  //marks
  $math = 78;
  $science = 90.97;
  $languages = 65;

  echo "<br> $studentName you scored the following:<br>";
  echo "Math: $math <br>";
  echo "Science: $science<br>";
  echo "Language: $languages<br>";

  //data types

  //var_dump($studentName);

  //Arthmetic Operators
  /**
   * Math
   * Addition +
   * Sub -
   * Multi *
   * division /
   * modulus %
   * **
   * 
   */
  $totalMarks = $math+$languages+$science;
  echo("<h1>Total Marks: $totalMarks</h1>");
  $avg = $totalMarks/3;
  echo("<h1>Average Mark: $avg</h1>");
  //deduct
  $basicSalary = 60000;
  //deduction - 30% PAYE
  $paye = $basicSalary*0.3;
  echo "Basic Salary = $basicSalary<br>";
  echo "PAYE is ".$paye."<br>";

  //net salary
  $net = $basicSalary-$paye;
  echo "Net Salary = $net <br>";

?>