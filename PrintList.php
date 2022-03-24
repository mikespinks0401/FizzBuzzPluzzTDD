<?php

require_once 'FizzBuzzPlus.php';
 
function printList($number)
{
    $list = range(1, $number);
    foreach($list as $key => $value){
        $list[$key] = answer($value);
    }
    return $list;
    
}  
?>
