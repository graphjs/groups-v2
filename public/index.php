<?php

require __DIR__ . "/../vendor/autoload.php";
include __DIR__ . '/../lib/FileGeneration.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$pathInfo = $_SERVER['PATH_INFO'] ?? null;
$rootPath = dirname(__DIR__);

if ($requestMethod === 'POST' && $pathInfo === '/generate') {

    $dir = $rootPath . '/site/templates';
    $name = $_POST['name'] ?? null;
    $title = $_POST['title'] ?? null;
    $public_id = $_POST['public_id'] ?? null;

    if (! $name || ! $title) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'name and title are required',
        ]);
        exit;
    }

    (new FileGeneration($dir, $name, $title, $public_id))->generate();

    header('Content-Type: application/json');
    echo json_encode([
        'success' => true,
        'message' => 'Generated',
    ]);
    exit;
}

http_response_code(400);
header('Content-Type: application/json');
echo json_encode([
    'success' => false,
    'message' => 'Bad Request',
]);
