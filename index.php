<?php

require __DIR__ . "/vendor/autoload.php";

$init = include(__DIR__ . "/lib/init.php");
$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$goal = "show";
$public_id = '0AA5B31C-45FE-41F6-BF91-5CB12076468C';
$primary_color = '#6f879f';
$text_color = '#3f5f7f';
$background_color = '#ffffff';
$host = "https://gjb31c45fe41f6bf915cb12076468c.herokuapp.com";
$stream_host = "";
$theme = "light";

echo $templates->render($_GET["page"], [
        "goal"             => $goal,
        "brand"            => "Sample Page",
        "public_id"        => $public_id, // $init($public_id), // (new \Tholu\Packer\Packer($init($public_id)))->pack()
        "primaryColor"     => $primary_color,
        "textColor"        => $text_color,
        "backgroundColor"  => $background_color,
        "host"             => $host,
        "theme"            => $theme,
        "streamHost"       => $stream_host
    ]
);