<?php 
$ary = ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>"Testing"];
var_dump($ary);
echo "<br>";
echo $ary["One"];
echo "<hr>";
$obj = (object)$ary;
var_dump($obj);
echo "<br>";
echo $obj->One;
?>