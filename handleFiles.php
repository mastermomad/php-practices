<?php
include "printwordsinsentence.php";
   //echo readfile("newfile.txt")."<br>";
   $myfile=fopen("newfile.txt","r") or die("unable to open file!");
  // echo fread($myfile,filesize("newfile.txt"))."<br>";
   //php read single line-fgets()
   for($i=0;$i<3;$i++){
   $line=fgets($myfile)."<br>";
   printwordsinsentencewithposition($line);
}
fclose($myfile);
?>