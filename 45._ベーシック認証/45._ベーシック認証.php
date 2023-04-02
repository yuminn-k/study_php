<?php
echo __FILE__;
// /Applications/MAMP/htdocs/php_test/45._ベーシック認証/45._ベーシック認証.php

echo '<br>';
// パスワード(暗号化)
echo(password_hash('password123', PASSWORD_BCRYPT))
// $2y$10$BNxhNvqk63JxPwuRLeQsuOEbsZHbEkb1.xtcrH9qTmWMBfYWNEDWa
?>