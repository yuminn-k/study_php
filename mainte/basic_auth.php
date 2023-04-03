<?php

//パスワードを記録したファイルの場所
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/test.php

echo '<br>';
//パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT));
