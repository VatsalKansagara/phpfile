<?php

$v=65;
for($i=65;$i<=69;$i++)
{
    for($m=$i;$m<=69;$m++)
    {
        echo "&nbsp;";
    }
    for($s=65;$s<=$i;$s++)
    {
        echo " " .chr($v++);
    }
    echo "<br>";
}

?>