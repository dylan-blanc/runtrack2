<?php


function &getHello($str= "Hello LaPlateforme") {
    return $str;
}

$reference = &getHello();

echo $reference;