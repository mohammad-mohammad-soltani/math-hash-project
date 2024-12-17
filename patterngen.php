<?php
require_once "pattern.php";
$pattern = "";
foreach ($letters as $key){
    $pattern.= md5($key.sin(random_int(0 , 1000000000)))."\n";
}
file_put_contents("p.txt" , $pattern);