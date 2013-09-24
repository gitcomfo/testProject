<?php

//File up Array with names
$nameArray[]="Bushra rahman";
$nameArray[]="Bush dot CSS";
$nameArray[]="Zeshi Sultana";
$nameArray[]="Iftekharul Alam Efat";
$nameArray[]="Mohammad Ibrahim";
 
//Get the nameValue parameter from url
$nameValue = $_GET["hintValue"];

//lookup all hints from nameArray if length of nameValue > 0
if(strlen($nameValue) > 0){
    $hint = "";
    for($loop=0;$loop < count($nameArray);$loop++){
        if(strtolower($nameValue)==  strtolower(substr($nameArray[$loop],0, strlen($nameValue)))){
            if ($hint==""){
                $hint=$nameArray[$loop];
            }  else {
            $hint=$hint." , ".$nameArray[$loop];    
            }
        }
    }
}  else {
    $hint == "";
}
//set output to "No Suggestion in no hint were found"
// or to the correct Values
if($hint == ""){
    $responseSuggestion = "No Suggestion, Please try with another way";
    }  else {
$responseSuggestion = $hint;    
}
//output the response
echo $responseSuggestion;
?>
