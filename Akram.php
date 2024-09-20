<?php

/*this php script captures information
 concerning my name, home address, date of birth
 and then displays a statement that welcomes me
  home and reminds me my age on that day*/
$MyName=readline("input your name:\n");
$HomeAddress=readline("Input your home address:\n");
$Date_of_birth=readline ("input your date of birth: ");
$CurrentYR=(int)readline("Input current year: ");
$BirthYR=(int)readline("Input birth year: ");
$Age = $CurrentYR-BirthYR;
echo("{$MyName}, We are so glad to have you back 
and as of today, you are {$Age} years of age.\n");


?>
