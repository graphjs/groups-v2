<?php

require __DIR__ . "/vendor/autoload.php";

$init = include(__DIR__ . "/lib/init.php");
$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$goal = "show";
$public_id = '3D90D5DC-9D34-449D-9AB5-F34A2C4246F2';
$primary_color = 'rgb(111, 135, 159)';
$text_color = 'rgb(63, 95, 127)';
$background_color = 'white';
$host = "https://gjd5dc9d34449d9ab5f34a2c4246f2.herokuapp.com/";
$stream_host = "";

echo $templates->render($_GET["page"], [
        "goal"             => $goal,
        "brand"            => "UX Lovers",
        "public_id"             => $public_id, // $init($public_id), // (new \Tholu\Packer\Packer($init($public_id)))->pack()
        "primaryColor"     => $primary_color,
        "textColor"        => $text_color,
        "backgroundColor"  => $background_color,
        "host"             => $host,
        "streamHost"       => $stream_host
    ]
);