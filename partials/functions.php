<?php

function passwordGenerator($array, $limit) {
    
    $output = '';
    
    while (strlen($output) < $limit) {
        
        $output .= $array[rand(0, count($array) -1)];
        
    };
    
return $output;    
}
?>