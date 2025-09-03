<?php

require 'classes.php';
require 'layouts.php';
require 'forms.php';

$hello=new HelloWorld();
$layout=new layouts();
$form=new forms();

print $layout->header($conf);
$form->signup();
print $hello->today();
print $layout->footer($conf);

// print "Hello,World!";
// print "<p>Today is " .date("1"). "</p>"

?>