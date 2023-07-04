<?php
$r = explode('/', $_SERVER['REQUEST_URI']);
switch ($r[1])
{
    case 'page1':
        $htmlTitle = '111';
        $pageTitle = '111';
        $phpCode = ' some php code as string ';
        include('template.html');
        break;
  
    case 'page2':
        $htmlTitle = '222';
        $pageTitle = '222';
        $phpCode = ' some php code as string ';
        include('template.html');
        break;
  
    default:
        $htmlTitle = '404';
        $pageTitle = '404';
        http_response_code(404);
        include('template.html');
        break;
}
