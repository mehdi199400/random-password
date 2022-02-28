<?php
function randomPassword($length = 15) {
    $alphapass = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*/~";
    $pass = array();
    $alphaLength = strlen($alphapass) - 1;
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphapass[$n];
    }
    return implode($pass);
}

echo randomPassword();
