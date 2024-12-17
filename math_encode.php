<?php
class math_encode{
    function __construct($letters , $fibo = null)
    {
        $this -> letters = $letters;
        $this -> fibo = $fibo;
    }
    function create_first_hash($num)
    {   
        /*
        $sum = 0;
        foreach(str_split(md5($num)) as $key){
            $sum += ord($key);
        }*/
        return ord($num);
    }
    function fibo($num_1 , $num_2 , $to , $file){
        $handle = fopen($file , "a+");
        fwrite($handle , $num_1+$num_2 . " \n" . $num_1 + $num_2 + $num_2 . "\n");  
        fclose($handle);
        if(2 * ($num_2 * 2 + $num_1) <= $to){
            $this -> fibo($num_1 + $num_2  , $num_1 + $num_2 + $num_2 , $to , $file);
        }else{
            return true;
        }
    }
   
}
