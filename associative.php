<?php

echo"<h1>associative arrays</h1>";

$age = array("vatsal"=>"20","manish"=>"21","joe"=>"37","amar"=>"151");
echo $age['vatsal'];

echo "<h2>vatsal is ".$age["vatsal"]." year old.</h2>";
echo "<h2>amar is ".$age["amar"]." year old.</h2>";



echo "<h1>long digite array";
echo "<br>";

$long = array(12,45,63,78,95,46,26,385,89,56);
$longcount = count($long);

for($x=0;$x < $longcount;$x++){
    echo $long[$x];
    echo "<br>";
}

?>