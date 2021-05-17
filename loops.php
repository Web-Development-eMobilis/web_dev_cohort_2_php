<?php
//echo from 1 to 100
echo "<h4>Manually</h4>";
echo "1<br>";
echo "2<br>";
echo "3<br>";
echo "4<br>";
echo "5<br>";
echo "6<br>";
echo "7<br>";
echo "8<br>";
echo "9<br>";
echo "10<br>";

echo "<h4>Automatically!</h4>";
$x = 1;

while($x<=20){
    //code to be repeated over and over untill the condition
    //modulus % 
    if($x % 2 != 0){
        echo "$x <br>";
    }
    
    $x++;
}
echo "<h4>Do While!</h4>";

$y =0;

do{
    echo " ".$y;
    $y++;
}while($y<=10);

echo "<h4>For Loop!</h4>";

for($i=10;$i>=0;$i-=2){

    echo " ".$i;

}

?>