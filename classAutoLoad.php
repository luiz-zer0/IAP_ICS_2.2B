
<?php

require __DIR__ . '/plugins/PHPMailer/vendor/autoload.php';
require 'conf.php';

$directories = ['Layouts', 'Forms', 'Global','Proc'];

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

//create an instance of the class
$ObjSendMail = new SendMail();
$ObjLayouts = new Layouts();
$ObjForms = new forms();

$ObjAuth= new auth();
$ObjFncs = new fncs();

$ObjAuth->signup($conf,$ObjFncs,$lang,$ObjSendMail);
// $ObjDatabase = new Database($conf);



