<?php
require_once "math_encode.php";
$encode = new math_encode("a");
$encode -> fibo(0 , 1 , 100000000000000000000000 , "a.txt");