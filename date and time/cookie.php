<?php
$key ="NAME";
$key ="ABC";
setcookie($key,$value,time()+4500,"/");
if(!isset($_COOKIE[$key])){
    echo"COOKIE IS NOT SET";
}
else{
    echo"COOKIE VALUE IS=".$COOKIE[$key];
    }
    ?>
    