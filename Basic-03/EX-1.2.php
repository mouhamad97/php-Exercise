<?php  
$num = 123;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum += $rem;  
   $num=$num/10;  
  }  
 echo "the Sum is $sum";  
 ?>  