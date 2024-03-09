<?php

echo "<h1>index array</h1>";

$age = array(45,68,36,95,78,61,89,"binal","kriti","ena","mina","tika");
$agecount = count($age);


for($v=0; $v < $agecount; $v++){
    echo $age[$v];
    echo "<br>";
}


echo "<h1>Associative array</h1>";

$asso = array("binal"=>"25","kriti"=>"64","ena"=>"32","mina"=>"35","tika"=>"25");
$assocount = count($asso);

echo $asso['binal'];
echo "<br>";

foreach ($asso as $b=>$b_value){
echo $b ." age is ".$b_value .".";
echo "<br>";
}



echo "<h1>multidimensional array</h1>";

$multi = array(
array("binal",26,35),
array("kriti",15,20),
array("ena",18,25),
array("mina",20,23),
array("tika",21,23)
);
$multicount = count($multi);

echo $multicount;
echo "<br>";
echo "binal old age is " .$multi[0][1] ." and today " .$multi[0][2] .".<br>";
echo "kriti old age is " .$multi[1][1] ." and today " .$multi[1][2] .".<br>";
echo "ena old age is " .$multi[2][1] ." and today " .$multi[2][2] .".<br>";
echo "mina old age is " .$multi[3][1] ." and today " .$multi[3][2] .".<br>";
echo "tika old age is " .$multi[4][1] ." and today " .$multi[4][2] .".<br>";
?>
