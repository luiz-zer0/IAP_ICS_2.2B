<?php
class HelloWorld{
    public function greet(){
        return "<h1>Hello, ICS!</h1>";
    }
      
    public function today(){
        return "<p>Today is ".date("1") ."</p>";
    }
}

//creating an instance of the class
$hello=new HelloWorld();

//using class methods
print $hello->greet();
print $hello->today();



?>