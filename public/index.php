<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$url = rtrim($url, '/');

$url = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $url);

$page = realpath(__DIR__ . '/../src/pages/' . $url . '.php');
$realBase = realpath(__DIR__ . '/../src/pages/');

if ($page && strpos($page, $realBase) === 0 && file_exists($page)) {
    require_once $page;
} else {
    header('HTTP/1.1 404 Not Found');
}
