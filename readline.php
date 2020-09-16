<?php


echo "Please enter your first name\n";  
$first_name = readline(">> ");
$first_name = ucwords($first_name);
echo "Please enter your last name\n";
$last_name = readline(">> ");
lcfirst($last_name);
$last_name = ucwords($last_name);
echo "Where were you born?\n";
$place_of_birth = readline(">> ");
echo "Where do you live now?\n";
$live_now = readline(" >> ");
echo "Your full name is $first_name " . "$last_name"  . " ." . "You were born in $place_of_birth ";
" and you now live in $live_now ";
