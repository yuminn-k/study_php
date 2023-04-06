<?php
function string_starts_with($input, $value)
{
  return $value === "" || mb_strrpos($input, $value, -mb_strlen($input)) !== false;
}

var_dump(string_starts_with("안녕하세요.", "안녕"));  // bool(true)
var_dump(string_starts_with("안녕하세요.", "하이"));  // bool(false)
?>