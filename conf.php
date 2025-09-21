<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//site timezone
$conf['site_timezone']='Africa/Nairobi';
//site info
$conf['site_name']='ICS B';
$conf['site_url']='http://localhost:8080';
$conf['admin_email']='admin@isacademy.com';

//site language
$conf['site_lang']='en';
require __DIR__.'/lang/'.$conf['site_lang'].'.php';

//database connection
$conf['db_type']='pdo';
$conf['db_host']='localhost';
$conf['db_user']='root';
$conf['db_pass']='';
$conf['db_name']='ics_b';

//email settings
$conf['mail_type']='smtp'; //phpmail or smtp
$conf['smtp_host']='smtp.gmail.com';
$conf['smtp_user']='Louis.Muturi@strathmore.edu';
$conf['smtp_pass']='rtga bzpy jilm uzgo';
$conf['smtp_port']=465;
$conf['smtp_secure']='ssl'; //tls or ssl

// Set password length
$conf['min_password_length'] = 8;

// Set valid email domain (for example: 'icsbacademy.com')
$conf['valid_email_domain'] = ['icsbacademy.com', 'yahoo.com', 'gmail.com', 'outlook.com', 'hotmail.com', 'strathmore.edu'];

//setting random verification code 
$conf['reg_ver_code']=rand(100000,999999);

// Set verification code expiry time (in minutes)
$conf['ver_code_expiry'] = 5;

?>