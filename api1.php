<?php
$text = $_GET["text"];
for($i=0 ;$i < strlen(text)/2 ;$i++){
    $j = strlen(text)-1-$i;
    if(text[$i] == text[$j]){
        $res = "Palindrome";
    }
    else{
        $res = "Not Palindrome";
    }
}
$results = [
    "result" => $res
]
?>