<?php
defined('ROOTPATH') OR exit('Access Denied!');
session_start();

class Router
{
    
    public function routeURL()
    {
        // 1. $URL = $_GET['url'] if isset, else $URL = home
        $URL = $_GET['url'] ?? 'home';

        // 2. Convert $URL string to array $URL[]
        $URL = explode('/', $URL);
        
        // 3. Generate path to template file and store in variable
        $filename = "../inc/templates/" . $URL[0] . ".php"; 

        // 4. If template path exist, display contents
        if (file_exists($filename))
           require $filename;

        // 5. If path not found, use 404
        else {
            $filename = "../inc/templates/404.php";
            require $filename;
        }

    }
}

