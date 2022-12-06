<?php

$multi = array(array(4.5,5.6,3.5,1.4,7.7),
               array(7.5,6.8,5.6,6.8,8.1),
               array(4.1,5.9,7.6,6.4,8.3));

echo print_r($multi);

echo "<br><br>";

for($i=0;$i<count($multi);$i++)
{
    for($j=0;$j<count($multi[$i]);$j++)
    {
        echo print_r($multi[$i][$j]);
        echo "      ";
    }
    echo "<br><br>";
}

?>