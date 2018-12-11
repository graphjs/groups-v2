<?php

require "vendor/autoload.php";

$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

echo $templates->render($_GET["page"], ['id' => $_GET["id"]]);