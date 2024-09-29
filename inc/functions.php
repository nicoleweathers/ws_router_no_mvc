<?php
function img($img)
{
    return '<img src="'.ROOT.'imgs/'.$img.'.png" title="'.$img.'">';
}
function ws_header($bgcolor='#fff', $title='New Router Tutorial')
{
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    <link rel="stylesheet" href="'.ROOT.'style.css">
    <style>
       div{ background: '.$bgcolor.'; }
    </style>
</head>
<body>
<ul>
<li><a href="'.ROOT.'">Main</a></li>
<li><a href="'.ROOT.'blue">blue</a></li>
<li><a href="'.ROOT.'green">green</a></li>
<li><a href="'.ROOT.'purple">purple</a></li>
<li><a href="'.ROOT.'yellow">yellow</a></li>
</ul>
    ';
}

function ws_footer()
{
    echo '
    <div  id="bottom" align="center">'.date('Y') .' &copy; copyright</div>
    </body>
</html>
';
}