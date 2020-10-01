<?php
    $a=array(array(5,1),array(12,7));
    $b=array(array(4,13),array(9,6));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>