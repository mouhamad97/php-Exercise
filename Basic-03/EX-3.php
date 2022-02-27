<?php

use function PHPSTORM_META\map;

function numberOf($str , $usedWord){

   $arr =explode(" ",$str);
   $numOfElmenets = count($arr);
   $i=0;
   $numberOfRep = 0;
   while($numOfElmenets >0 ){
      
        if($arr[$i]==$usedWord){
                $numberOfRep ++;
        }
        $numOfElmenets--;
        $i++;
    
   }
   echo $numberOfRep;
   
}


numberOf('hello i am hello not saying hello' ,'i')

?>