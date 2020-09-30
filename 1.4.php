<?php
$i = 1;

do{
  printf("input number:") ;  
  fscanf (STDIN, "%f", $a1);
  if ($a1>$a3) $a3=$a1;
  else if ($a1<$a3) $a3=$a3;
  $s +=$i;}
while ($s<10);
printf("the biggest number is $a3");
  
