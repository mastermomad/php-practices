<?php
$sentence="hello. welcome to this world!";
printWordsInSentenceWithPosition($sentence);

function printWordsInSentenceWithPosition($sentence){
    $arr_words=array();
    while(strpos($sentence," ")==!0){
  	
  	   array_push($arr_words, findTheFirstWordInSentence($sentence));
  	  //decrement sentence
  	   $sentence=substr($sentence,strpos($sentence," ")+1);
    }
  //push the last word in array
    array_push($arr_words, $sentence);
  
    return printWordsInArray($arr_words);
  //function for looping through the array to print out
  }
  function printWordsInArray($array){
      for ($i=0;$i<count($array);$i++){
  	     $position=$i+1;
  	     echo "The word at position ".$position." is <strong>".$array[$i]."</strong><br>";
        }
    }
    function findTheFirstWordInSentence($sentence){
    	$word=" ";
  	//to print the word
  	    for($i=0;$i<strpos($sentence," ");$i++){
  		$word.=$sentence[$i];
  	    }//array taht store all words
  	    return $word;
    }
?>