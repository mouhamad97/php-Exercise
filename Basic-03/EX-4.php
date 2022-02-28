<?php 

for($i=0;$i<=6;$i++){
    for($j=0;$j<=6;$j++){
     if($i == 0 || $i == 6 || $i == $j ){
         echo "*";
     } else{
         echo ' - ';
     }
    }
    echo "<br/>";
}


?>