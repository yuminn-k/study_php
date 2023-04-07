<?php
function valid_number($input)
{
  $input = strval($input);
  return (bool) preg_match('/^[\-+]?[0-9]*\.?[0-9]+$/', $input);
}

function var_dump_br($val)
{
  var_dump($val);
  echo "<br />";
}

$vals = array(1, 3, 0.14, "5", "9.7", "asd", "024", "051.3", "1337e0"); // 1337e0 = 1259488

foreach ($vals as $val) {
  echo $val;

  var_dump_br(valid_number($val));
  var_dump_br(is_numeric($val));
  echo "<hr />";
  /*
1
bool(true) 
bool(true) 

3
bool(true) 
bool(true) 

0.14
bool(true) 
bool(true) 

5
bool(true) 
bool(true) 

9.7
bool(true) 
bool(true) 

asd
bool(false) 
bool(false) 

024
bool(true) 
bool(true) 

051.3
bool(true) 
bool(true) 

1337e0
bool(false) 
bool(true)
  */
}
?>