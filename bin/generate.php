#!/usr/bin/php
<?php

require dirname(__DIR__) . "/vendor/autoload.php";
include dirname(__DIR__) . '/lib/FileGeneration.php';

$dir = dirname(__DIR__) . '/site/templates';
$templates = new League\Plates\Engine($dir);

$cmd = new Commando\Command();

$cmd->setHelp("Generates static social network frontend");

$cmd->option()
    ->require()
    ->describedAs('Short Group Name (ASCII only)');

$cmd->option()
    ->require()
    ->describedAs('Group Title (may contain spaces or special chars)');

$cmd->option('d')
    ->aka('description')
    ->describedAs('Group Description (may contain spaces or special chars)');

$cmd->option('i')
    ->aka('id')
    ->describedAs('GraphJS ID');

$cmd->option('h')
    ->aka('host')
    ->describedAs('GraphJS Server Hostname');

$cmd->option('s')
    ->aka('stream_host')
    ->describedAs('Stream Server Hostname');

$cmd->option('p')
    ->aka('primary_color')
    ->describedAs('Primary Color');

$cmd->option('t')
    ->aka('text_color')
    ->describedAs('Text Color');

$cmd->option('b')
    ->aka('background_color')
    ->describedAs('Background Color');

$cmd->option('t')
    ->aka('theme')
    ->describedAs('Theme (light or dark)');

$name = $cmd[0];
$title = $cmd[1];
$description = $cmd["description"] ?? "";
$public_id = $cmd["id"] ?? null;

$theme = $cmd['theme'] ?? "light";
$text_color = $cmd['text_color'] ?? null;
$background_color = $cmd['background_color'] ?? null;
$primary_color = $cmd['primary_color'] ?? null;
$host = $cmd['host'] ?? null;
$stream_host = $cmd['stream_host'] ?? null;

(new FileGeneration($dir, $name, $title, $description, $theme, $public_id, $primary_color, $text_color, $background_color, $host, $stream_host))->generate();
