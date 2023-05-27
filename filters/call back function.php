<?php
  $s1="hello world";
  $s2="good morning";
  function c1($s1){
echo $s1." ";
  }
  function c2($s2){
echo $s2." ";
  }
  function display($arg1,$arg2){
    $arg1($arg2);
  }
  display("c1",$s1) ;
  function call ($a){
    return strlen($a);
}
$a=array("a1","a2","a3");
print_r(array_map("call",$a)); 