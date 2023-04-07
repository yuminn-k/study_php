<?php
$emails = array(
  'aaa@bbb.com',
  'abc',
  '.com',
  '@.com'
);

foreach ($emails as $email) {
  echo "$email : ";
  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
  /*
aaa@bbb.com : string(11) "aaa@bbb.com" 
abc : bool(false) 
.com : bool(false) 
@.com : bool(false) 
  */
  echo "<br />";
}
?>