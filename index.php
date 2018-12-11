<?php

require "vendor/autoload.php";

$templates = new League\Plates\Engine(__DIR__ . '/templates');

echo $templates->render('profile', ['name' => 'Jonathan']);
