<?php
    $greeting = "Hello world";
    $value = 5;
?>

<h1>
    <?php
    if($value === 1) {
        echo $greeting;
    }
    elseif ($value === 5) {
        echo "Hello Riga";
    }
    else {
        echo "Hello Latvia";
    }
    ?>
</h1>