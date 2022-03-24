<?php

   
 
function answer($number)
{
    $answer = "";
    if($number % 3 === 0 || strval($number)[0] === "3" || strval($number)[1] === "3"){
       $answer = "Fizz";
    }
    if($number % 5 === 0 || strval($number)[0] === "5"){
       $answer .= "Buzz";
    }
    
    
    if($answer == ""){
        $answer .= strval($number);
    }
    return $answer;
}


?>
