<?php


for($i=1;$i<=5;$i++)
{
    for($m=$i;$m<=5;$m++)
    {
        echo "&nbsp;";
    }
    for($s=1;$s<=$i;$s++)
    {
        echo " *";
    }
    echo "<br>";
}
for($i=4;$i>=1;$i--)
{
    for($m=$i;$m<=5;$m++)
    {
        echo "&nbsp;";
    }
    for($s=$i;$s>=1;$s--)
    {
        echo " *";
    }
    echo "<br>";
}


?>