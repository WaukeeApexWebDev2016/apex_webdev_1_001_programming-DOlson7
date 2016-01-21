<?php

$name = readline("Enter your name: ");

echo "Hello: " . $name . "\n";

$first = 5;
$other = 10;


echo $first * $other;
echo "\n";

echo var_dump(true and true);
echo var_dump(true and false);

echo var_dump(true or true);
echo var_dump(false or false);

echo var_dump(!false);

if(true) {
    echo "Yes\n";
}

if(false) {
    echo "2) Yes\n";
}

$username = readline("Enter your username:");

if($username == "admin") {
    echo "You are admin. All access granted.\n";
}

else if ($username == "Derek")
{  echo "Welcome Derek\n"; }

else {
  echo "Access Denied.\n";
}
















?>
