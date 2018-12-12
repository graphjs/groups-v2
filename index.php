<?php

require "vendor/autoload.php";

$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$public_id = '79982844-6a27-4b3b-b77f-419a79be0e10';
echo $templates->render($_GET["page"], [
        "brand"     => "UX Lovers",
        "public_id" => $public_id
    ]
);