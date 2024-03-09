<?php

echo "<h1>Associative array</h1>";


$age = array("vatsal"=>"20","manish"=>"21","dhavalbhai"=>"23","binalmam"=>"35");
$agecount = count($age);

echo $agecount;
echo "<br>";
echo "vatsal age is " .$age['vatsal'];
echo "<br>";


foreach($age as $d=>$manji){
    echo "keys = " .$d ." values = " .$manji;
    echo "<br>";
}


echo "<h1>Multidimensional array</h1>";

$multi = array(
    array("vatsal"=>"20"),
    array("manish"=>"21"),
    array("dhavalbhai"=>"23"),
    array("binalmam"=>"35"),
    array("shruti",18,33,25,68,91,35,46)
);

echo $multi[4][5];

?>
