<?php

function myUrlEncode($string) {
    return str_replace(" ", "-", $string);
}
function myUrlDecode($string) {
    return str_replace("-", " ", $string);
}
