<?php
printf("input your first number:");
fscanf(STDIN, "%s", $first);
printf("input your second number:");
fscanf(STDIN, "%s", $second);
if ($first>$second) printf ($first. " greater than ". $second);
else if ($first==$second) printf($first. " equal to ". $second);
else if ($first<$second) printf($first. " less than ". $second);
else printf("invalid your menue number");