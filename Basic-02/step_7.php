<?php 

function wordChange($name){

    if($name == 'php'){
     $newWord = str_replace('php','python',$name);
}else {
    $newWord = str_replace('python','php',$name);
}
return $newWord;
}




echo wordChange('python');

?>