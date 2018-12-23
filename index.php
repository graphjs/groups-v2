<?php

require __DIR__ . "/vendor/autoload.php";

$init = include(__DIR__ . "/lib/init.php");
$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$goal = "show";
$public_id = '393CD160-2F38-4A7E-BF5A-FA0657FD649C';
$primary_color = '#6f879f';
$text_color = '#3f5f7f';
$background_color = '#ffffff';
$host = "https://gjd1602f384a7ebf5afa0657fd649c.herokuapp.com/";
$stream_host = "";
$theme = "light";

echo $templates->render($_GET["page"], [
        "goal"             => $goal,
        "brand"            => "UX Lovers",
        "public_id"             => $public_id, // $init($public_id), // (new \Tholu\Packer\Packer($init($public_id)))->pack()
        "primaryColor"     => $primary_color,
        "textColor"        => $text_color,
        "backgroundColor"  => $background_color,
        "host"             => $host,
        "theme"            => $theme,
        "streamHost"       => $stream_host
    ]
);