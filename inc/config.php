<?php
//  shorthand if else conditional ROOT define value
$_SERVER['SERVER_NAME'] == 'localhost' ? 
define('ROOT', 'http://localhost/router_no_mvc/public/') : 
define('ROOT', 'https://yourdomain.com');


