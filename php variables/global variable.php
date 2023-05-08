<?php
$x = 2;
$y = "hai";
$z = 1;
function global_var() {
  global $x, $y, $z;
  echo  $x ,$y ,$z;
}
global_var();
?>