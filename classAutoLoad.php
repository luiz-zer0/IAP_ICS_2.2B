<?php
$directories=['Layouts','Forms','Global'];



spl_autoload_register(function($class_name) use ($directories)){
    foreach($directories as $directory){
        $file=__DIR__.'/'.$directory
    }






    }
?>