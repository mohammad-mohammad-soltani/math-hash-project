<?php
require_once "pattern.php";
require_once "math_encode.php";

$mencode = new math_encode($letters , $fibo);
$text = readline("enter your text ");

$mat = [
    "x" => [],
    "y" => [],
    "z" => false,
    "points" => []
];

$text_arr = str_split($text);
$i = 0;

if(count($text_arr) % 2 == 0){
    foreach($text_arr as $key){
        $i++;
        if($i % 2 != 0 ){
            $mat["x"][] = $mencode->create_first_hash($key);
        } else {
            $mat["y"][] = $mencode->create_first_hash($key);
        }
    }
} else {
    $mat["z"] = $mencode->create_first_hash($text_arr[count($text_arr)-1]);
    unset($text_arr[count($text_arr)-1]);
    foreach($text_arr as $key){
        $i++;
        if($i % 2 != 0){
            $mat["x"][] = $mencode->create_first_hash($key);
        } else {
            $mat["y"][] = $mencode->create_first_hash($key);
        }
    }
}

sort($mat["x"]);
sort($mat["y"]);

$i = 0;
foreach($mat["x"] as $key){
    if (isset($mat["y"][$i])) {
        $mat["points"][] = ["x" => $key, "y" => $mat["y"][$i]];
        $i++;
    }
}

print_r($mat);


?>
