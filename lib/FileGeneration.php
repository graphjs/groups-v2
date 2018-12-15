<?php

class FileGeneration
{
    private $dir;
    private $name;
    private $title;

    public function __construct($dir, $name, $title)
    {
        $this->dir = $dir;
        $this->name = $name;
        $this->title = $title;
    }

    public function generate()
    {
        $dir = $this->dir;
        $name = $this->name;
        $title = $this->title;
        $templates = new League\Plates\Engine($dir);

        /// defaults
        $goal = "generate";
        $public_id = '79982844-6a27-4b3b-b77f-419a79be0e10';
        $primary_color = 'rgb(111, 135, 159)';
        $text_color = 'rgb(63, 95, 127)';
        $background_color = 'white';
        $host = "";
        $stream_host = "";
        /// defaults

        $site = __DIR__. '/../dist/' . $name;
        if (! file_exists($site)) {
            mkdir($site);
        }
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
                        "goal"=>$goal,
                        "public_id"=>$public_id,
                        "brand"=>$title,
                        "primaryColor"     => $primary_color,
                        "textColor"        => $text_color,
                        "backgroundColor"  => $background_color,
                        "host"             => $host,
                        "streamHost"       => $stream_host
                    ])
                );
            }
        }

        $init = include __DIR__ . '/../lib/init.php';
        $initOutput = $init($public_id, $primary_color, $text_color, $background_color, $host, $stream_host);

        $packer = new \Tholu\Packer\Packer($initOutput, 'Normal', true, false, true);
        $packed = $packer->pack();
        $jsFilePath = $site.'/'.'init.js';
        file_put_contents($jsFilePath, $packed);
    }
}
