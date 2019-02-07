<?php
function phone_link($phone)
{
    return str_replace([' ', '(', ')', '-'], '', $phone);
}


function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}
?>