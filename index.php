<?php

//define relative path to source, which is our file
$path = 'files/stock.txt';

//attempt to open a file for reading
$handle = fopen($path, 'r');

//test if we have a successfully created a handle to our file
if($handle){
    "$path was successfully opened for reading";
}else{
    "failed to open $path for reading";
}