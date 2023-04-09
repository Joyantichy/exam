<?php
$num = "30,29,34,35,30,45,45,67,8,9,8,89,89,56,9";
// $numInt =(int)$num;
// $numFloat = (float)$num;
$average = array_sum((float)$num)/ count((float)$num);
echo $average;





$num = "3.14";
$int = (int)$num;
$float = (float)$num;
echo $int;