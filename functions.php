<?php

function addButton($number, $success) {
    
    if ($number % $success == 0) {
        echo'<button class="success">' . $number . '</button>'; 
    }
    else {
        echo'<button>' . $number . '</button>';
    }
}


function addMultipleButtons($start, $success, $end) {
    addButton($start, $success);

if($start < $end){
    addMultipleButtons($start + 1, $success, $end);
}
}