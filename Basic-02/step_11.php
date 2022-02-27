<?php 

function isPrime($number){

for($i=1;$i<$number;$i++){

    if($number%$i ==0 && $i!=$number &&  $i!=1){
            echo  $number .'is not a prime number and its devided by '.$i .' /n';
    } 
} 


    echo 'prime number';


}

isPrime(12);


?>