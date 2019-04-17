<?php

require __DIR__ . "/../vendor/autoload.php";
include __DIR__ . '/../lib/FileGeneration.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$pathInfo = $_SERVER['PATH_INFO'] ?? null;
$rootPath = dirname(__DIR__);
$dir = $rootPath . '/site/templates';

$dotenv = new \Dotenv\Dotenv($rootPath);
$dotenv->load();

$name = $_REQUEST['name'] ?? null;
$title = $_REQUEST['title'] ?? null;
$remote_url = $_REQUEST['git'] ?? "";
$public_id = $_REQUEST['public_id'] ?? null;
$theme = $_REQUEST['theme'] ?? "light";
$text_color = $_REQUEST['text_color'] ?? null;
$background_color = $_REQUEST['background_color'] ?? null;
$primary_color = $_REQUEST['primary_color'] ?? null;
$host = $_REQUEST['host'] ?? null;
$stream_host = $_REQUEST['stream_host'] ?? null;
$secret = $_REQUEST['secret'] ?? null;
$regen = $_REQUEST['regen'] ?? false;

    if (! $name || ! $title || !$public_id) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'name, title are required',
        ]);
        exit;
    }

    if(md5($name.getenv("SALT"))!=$secret) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'not authorized',
        ]);
        exit;
    }

    // make a backup
    $backup_script = getenv("BACKUP_SCRIPT");
    if(
        !empty($backup_script) &&
        file_exists($backup_script) &&
        is_executable($backup_script)
    ) {
        exec(
            $backup_script
        );
    }

    // actual file generation takes place here.
    (new FileGeneration(
            $dir, $name, $title, $theme, $public_id, $primary_color,
            $text_color, $background_color, $host, $stream_host, $remote_url
        )
    )->generate($regen);

    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Generated',
    ]);
    exit;

