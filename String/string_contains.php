<?php
function string_contains($input, $value) 
{
  return mb_strpos($input, $value) !== false;
}

var_dump(string_contains("안녕하세요.", "녕하")); // bool(true)
var_dump(string_contains("안녕하세요.", "하이")); // bool(false)
?>