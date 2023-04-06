<?php
function string_split($input, $separator)
{
  return explode($separator, $input);
}

var_dump(string_split("a,b,c,d,ef,ghi,j", ","));
/*
array(7) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" [3]=> string(1) "d" [4]=> string(2) "ef" [5]=> string(3) "ghi" [6]=> string(1) "j" } 
*/
exit();
?>