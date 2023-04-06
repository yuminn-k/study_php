<?php
function string_ends_with($input, $value)
{
  return $value === "" || (($temp = mb_strlen($input) - mb_strlen($value)) >= 0 && mb_strpos($input, $value, $temp) !== false);
}

var_dump(string_ends_with("안녕하세요.", "하세요."));   // bool(true)
var_dump(string_ends_with("안녕하세요.", "하이"));     // bool(false)
?>