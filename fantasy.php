<?php 

$string = "Gandalf,Aragorn,Legolas";

   $array  =   explode(",", $string);
      
    $result =  array_map('strtolower', $array);
 
    //  var_dump($result);
  
       $result  = implode("*", $result, ); 
       echo $result;
?>