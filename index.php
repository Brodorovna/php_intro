<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "head.php";

include "conditions.php";

include "functions.php";

include "form.php";

$end = 42;
if (isset($_GET['end']))
    {if (empty($_GET['end'])) {
         echo "<p>Значение пустое. Добавлено стандартное - 40</p>";
          $end = 40;
     } 
     else
    $end = $_GET['end'];
}

$start = 5;
if (isset($_GET['start'])){
    $start = $_GET['start'];
}

$success = 5;
if (isset($_GET['success'])){
    $success = $_GET['success'];
}

addMultipleButtons($start, $success, $end);

?>