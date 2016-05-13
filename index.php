<?php

class ReadWrite{

    // encapsulate them
    public $path;
    protected $handle;

    public function __construct($path){
        $this->path = $path;
        $this->files();
    }

    // our main method to perform actions to the file
    public function files(){
        // lets open our file
        $this->handle = fopen($this->path, 'r');

        //test if we have a successfully created a handle to our file
        if($this->handle){
           echo "$this->path was successfully opened for reading";
        }else{
            echo "failed to open $this->path for reading";
        }
    }
}

new ReadWrite('./files/data.txt');