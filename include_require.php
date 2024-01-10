<?php
//include('form_bootStrp.php');
//echo "It is still running";
// require('form_bootStrap.php');
// $a=readfile('form_bootStrap.php');
// $a=readfile('file.txt');
// echo($a);
//echo "It is still running";

$fptr=fopen("file.txt",'r');
// echo $fptr;

if(!$fptr){
    die("This file name is incorrect or file does'nt exist at the destination plz check it out immediately");
}
$content=fread($fptr,21);
// $content=fread($fptr,filesize('file.txt'));
echo "$content";
echo "<br><br>Trying fgetc below This line<br><br>";
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgets($fptr);
echo fgets($fptr);
echo fgets($fptr);
var_dump(fgets($fptr));
var_dump(fgetc($fptr));
echo "<br><br> Again<br><br>";
while($data=fgetc($fptr))
{
    echo $data;
}
echo "<br><br> Again<br><br>";
while($data=fgetc($fptr)){
    echo $data;
    if($data=="."){
        break;
    }
}
fclose($fptr);
$cc=fopen("fil.txt",'w');
fwrite($cc,"This is been overwrited on file provided here but we can't save anything cause everything is gonna replaced by another texts");
fclose($cc);
$c=fopen("fi.txt",'a');
fwrite($c,"This is type of content which got added to page or after the data ended lastly \n\n");
echo "<br><br>";
setcookie("catagory","Gaming",time()+200,"/");
echo "Cookie set successfully is ";
echo $_COOKIE['catagory'];
?>