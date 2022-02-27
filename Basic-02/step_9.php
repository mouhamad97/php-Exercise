<?php 

function is_power_of_two($number){

     if($number & ($number - 1) == 0){
        return $number.' is not the power of 2';
     }else{
        return $number.' is the power of 2';
     }
}

echo is_power_of_two(99);

?>