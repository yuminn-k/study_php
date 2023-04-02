<?php

$contactFile = '.contact.dat';

$contents = fopen($contactFile, 'a+');

$addText = '１行追記' . "\n";

fwrite($contents, $addText);

fclose($contents);

?>