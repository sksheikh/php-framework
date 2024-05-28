<?php
function redirect($url)
{
    header("Location: $url");
    exit();
}

function view($file_path)
{
    $path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path);
    $path = str_replace(".",DIRECTORY_SEPARATOR,$path);
    $file = APP_ROOT.DIRECTORY_SEPARATOR."pages".DIRECTORY_SEPARATOR.$path.".php";
    
    if(file_exists($file)){
        return require $file;
    }

    throw new Exception("Page not Found $file");
    
}

function pageInclude($file_path)
{
    include(APP_ROOT.'/pages/'.$file_path);
}