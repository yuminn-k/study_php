<?php
function string_replace($input, $old_str, $new_str)
{
  return str_replace($old_str, $new_str, $input);
}

var_dump(string_replace("안녕하세요.", "하세요", "히 가세요")); // string(20) "안녕히 가세요." 
?>