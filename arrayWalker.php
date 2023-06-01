<?php
$ary = ["1" => "One", "2" => "Two", "3" => "Three"];
function doIt($value, $key)
{
    echo "Key is " . $key . " Value is " . $value . "<hr>";
}
array_walk($ary, "doIt");
