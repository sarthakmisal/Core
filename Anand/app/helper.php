<?php
// echo "Hello";
if (!function_exists('format')) {
    function format($arr)
    {
        echo "<pre>";
        echo "Hey Sarthak<br>";
        print_r($arr);
        echo "</pre>";
        die;
    }
}
// namespace App\Helpers;
// class MyHelper{
// public static function format($arr){
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
//     die;
// }
// }
?>