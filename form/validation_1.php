<?php

function validation($request){ //$_POST連想配列

  $errors = [];

  if(empty($request['your_name'])){
    $errors[] = '氏名は必須です'; 
  }

  return $errors;
}

?>