<?php 


function greaterFn($num){
  if($num >30){
    return 'more than 30';
  }

  else if($num >20){
    return 'greater than 20';
  }
  else if($num >10){
    return 'greater than 10';
  }

  else {

      return 'less than 10';

    }
  }

  echo greaterFn(1);
?>
