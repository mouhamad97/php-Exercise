<?php 

function squreRoot($number){
    if($number >1 ){
        $newNumber  =sqrt($number);
        return $number.' is the square root of '.$newNumber;
    }
}

echo squreRoot(4);

?>