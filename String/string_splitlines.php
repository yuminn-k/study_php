<?php
function string_splitlines($input)
{
  return explode(PHP_EOL, $input);
}

$data = <<<CDATA
안녕
하신가
요?
CDATA;

var_dump(string_splitlines($data)); // array(3) { [0]=> string(6) "안녕" [1]=> string(9) "하신가" [2]=> string(4) "요?" } 
?>