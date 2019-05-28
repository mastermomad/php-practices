<?php
$arr=array("hello","how are you","is","ok");
for($i=0;$i<sizeof($arr)-1;$i++){
	if($arr[$i]>$arr[$i+1]){
		$temp=$arr[$i+1];
		$arr[$i+1]=$arr[$i];
		$arr[$i]=$temp;
	}
}
var_dump($arr);
?>