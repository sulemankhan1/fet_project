<?php

function myUrlEncode($string) {
    return strtolower(str_replace(" ", "-", $string));
}
function myUrlDecode($string) {
    return str_replace("-", " ", $string);
}
