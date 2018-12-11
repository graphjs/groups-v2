<?php

require "vendor/autoload.php";

$dir = __DIR__ . '/site/templates';
$templates = new League\Plates\Engine($dir);
$public_id = '79982844-6a27-4b3b-b77f-419a79be0e10';

mkdir(__DIR__. '/dist/' . $public_id);
$files = scandir($dir);
foreach($files as $file)
{
    if(
        $file!='.'&&$file!='..'
        &&$file!='template.php'
        &&strlen($file)>4&&substr($file, -4)=='.php'
    ) {
        $page = substr($file, 0, -4);
        $html = $page.'.html';
        file_put_contents(
            __DIR__.'/dist/'.$public_id.'/'.$html,
            $templates->render($page, ["public_id"=>$public_id])
        );
    }
}