<?php

// Disable warnings
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

// Check for set env variable name
if(getenv("MY_NAME")) {
  $my_name = getenv("MY_NAME");
} else {
  $my_name = "Unknown";
}

// Return
echo 'Hello World! <br/>';
echo 'My name is: ' . $my_name . '!';
