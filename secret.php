<?php
$password = 'qwerty';
echo md5(crypt($password,'md5(789lo)'));
