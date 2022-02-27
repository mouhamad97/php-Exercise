<?php 

function factorial($num){
    $box=$num;
    while($num !=0){
        
        $newNumber = $num -1;
        $box +=$newNumber;
        $num --;
        
    }
    echo $box;
}

factorial(3);
?>