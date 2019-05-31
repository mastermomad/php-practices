<?php
$arr1=array(1=>"hello");
$arr2=array(2=>"world");
$arr3=$arr2+$arr1;
ksort($arr3);
var_dump($arr3);
?>