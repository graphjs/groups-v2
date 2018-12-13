<?php

require "vendor/autoload.php";

$dir = __DIR__ . '/../site/templates';
$templates = new League\Plates\Engine($dir);
if($argc<3) {
    echo "You must enter name and id parameters.";
    exit(1);
}
$name = $argv[1];
$id = $argv[2]; // '79982844-6a27-4b3b-b77f-419a79be0e10';
$title = $argv[3] ? $argv[3] : $name; 

$site = __DIR__. '/../dist/' . $name;
mkdir($site);
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
            $site.'/'.$html,
            $templates->render($page, [
                "public_id"=>$id,
                "brand"=>$title
            ])
        );
    }
}