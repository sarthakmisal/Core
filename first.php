<?php
$arr1=array(23,452,38,82,34,77);
foreach ($arr1 as $key => $value) {
    echo "<br> &nbsp&nbspKey :".$key." &nbsp&nbspValue : ".$value;
}
echo "<br><pre>";
$kie=true;
print_r($arr1); 
var_dump($kie);
$d=date("l M Y H  j F i:j a");
echo "$d<br><br>";
$ass=["ram"=>"rhea","sham"=>"Shreya","Malhar"=>"Mona","Babu"=>"Shona"];
foreach($ass as $row){
    echo "<br>key ==> $row &nbsp";
}
function row(){
    echo "<h1>This is op</h1>";
}
row();
?>
<!-- <button onclick="row()"> click</button> -->