<?php
$sentence="hello. welcome to this world!";
while(strpos($sentence," ")){
  	
       
  	   $sentence=substr($sentence,strpos($sentence," ")+1);
  	   echo $sentence;
  	}
  	var_dump(strpos($sentence," "));
  	echo "it works";
?>