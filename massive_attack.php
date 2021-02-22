<?php

$a = [0, 3, 6, 1, 12];

$m_units = count($a);
$i0 = 0;
$i1 = $i0 + 1;


while (abs($a[$i0] - $a[$i1]) !== $m_units && $i0 < $m_units) { 
    while ($i1 < $m_units - 1) { 
        echo $a[$i0] . " - " . $a[$i1] .  "<br>";
        $i1 = $i1 + 1;
    }
    
    echo $a[$i0] . " - " . $a[$i1] . "<br>";
    $i0 = $i0 + 1;
    $i1 = $i0 + 1;
}   

if (abs($a[$i0] - $a[$i1]) == $m_units) {
echo "Yay: " .  $a[$i0] . " - " . $a[$i1] . " = " . abs($a[$i0] - $a[$i1]) ;
}
else {
    echo "There is no options";
}


?>
