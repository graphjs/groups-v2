<?php

require __DIR__ . "/vendor/autoload.php";

$rootPath = __DIR__;
$dotenv = new \Dotenv\Dotenv($rootPath);
$dotenv->load();

$init = include(__DIR__ . "/lib/init.php");
$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$goal = "show";
$public_id = getenv("PUBLIC_ID");
$primary_color = '#6f879f';
$text_color = '#3f5f7f';
$background_color = '#ffffff';
$host = getenv("HOST");
if(empty($host))
    $host = "https://accounts.groups2.com";
$stream_host = "";
$theme = "light";
$module_forum = getenv("MODULE_FORUM");
if(empty($module_forum))
    $module_forum = $_REQUEST["module_forum"] ?? "off";
$module_groups = getenv("MODULE_GROUPS"); 
if(empty($module_groups))
    $module_groups = $_REQUEST["module_groups"] ?? "off";
$extra_head = "";

echo $templates->render($_GET["page"], [
        "goal"             => $goal,
        "brand"            => "Sample Page",
        "about"            => "Sample Page is a sample Grou.ps site.", // Please check whether this line is necessary or not
        "public_id"        => $public_id, // $init($public_id), // (new \Tholu\Packer\Packer($init($public_id)))->pack()
        "primaryColor"     => $primary_color,
        "textColor"        => $text_color,
        "backgroundColor"  => $background_color,
        "host"             => $host,
        "theme"            => $theme,
        "streamHost"       => $stream_host,
        "moduleForum"      => $module_groups,
        "moduleGroups"     => $module_groups,
        "engine"           => "groupsville"

    ]
);