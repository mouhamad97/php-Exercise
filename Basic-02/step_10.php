<?php 

function isPalindrome($string){
    
if(strrev($string) == $string){
    return 'it is palindrome';
} else {
    return 'well it is not';
}

}
 echo isPalindrome('madam');


?>