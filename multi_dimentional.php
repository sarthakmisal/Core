<pre>
<?php
for ($i=0; $i <=5 ; $i++) { 
    for ($j=0; $j <5 ; $j++) { 
        echo "&nbsp&nbsp $j &nbsp&nbsp";
    }
    echo "<br><br>";
}

$arr=array(array(1,2,3,4),array(5,6,7,8),array(11,22,33,44));
// var_dump($arr);
print_r($arr);
echo "Global is been printed below";
print_r($GLOBALS);
print_r($GLOBALS['_SERVER']["SERVER_SOFTWARE"]);
echo "<br>";
var_dump($GLOBALS["_SERVER"]["REQUEST_TIME_FLOAT"]);
?>