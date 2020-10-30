<?php
printf("please input your unit:");
fscanf(STDIN,"%d",$unit);
if ($unit==0) printf("your price is 0");
elseif($unit<6) printf("your price is 10");
elseif($unit<11) 
 {$unit=10+($unit-5)*3;
 printf ("your price is $unit");}
elseif ($unit<16) 
 {$unit=25+($unit-10)*5;
 printf ("your price is $unit");}
elseif ($unit==16) 
{$unit=25+($unit-10)*5;
printf ("your price is 60");}
else printf ("please input number less than 17");

