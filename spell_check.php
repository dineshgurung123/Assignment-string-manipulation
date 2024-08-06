<?php

$string = "   ABRACADABRA   ";

  $cleanedSpelled =  strToLower( trim($string, " "));
   
  $correct = "abracadabra";
  if($cleanedSpelled ==  $correct){

    echo"spell is correct";
  }
  else{
    echo " wizarding world is still at risk!";
  }





?>