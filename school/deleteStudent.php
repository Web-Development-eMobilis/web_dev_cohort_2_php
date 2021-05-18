<?php
//handle
$adm = $_POST['adm'];
//echo $adm;
//connection
require('dbConnect.php');
//query
$sql = "DELETE FROM `students` WHERE `admission_number`=".$adm;

//execute
$result = mysqli_query($conn,$sql);

if($result){
    //
    header('location:showstudents.php');
}else{
    header('location:showstudents.php');
}
?>