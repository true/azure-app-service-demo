<?php

// Check for set env variable name
if(getenv("MY_NAME") !== false)
  putenv("MY_NAME=Unknown");

// Return 
echo 'Hello World!'
echo 'My name is: ' .$_ENV["MY_NAME"] . '!';
