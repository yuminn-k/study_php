<?php
function valid_required($input)
{
  return is_array($input) ? empty($input) === False : trim($input) !== '';
}

var_dump(valid_required(""));       // bool(false) 
var_dump(valid_required(array()));  // bool(false)
var_dump(valid_required("php"));    // bool(true)
var_dump(valid_required(array(1))); // bool(true)

function valid_required_get($key) {
  return isset($_GET[$key]) && valid_required($_GET[$key]);
}

$is_valid_required = valid_required_get("param");
?>