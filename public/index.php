<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$url = rtrim($url, '/');

$allowedRoutes = ['home', 'about', 'contact']; // Define allowed routes

if (in_array($url, $allowedRoutes)) {
    $page = realpath(__DIR__ . '/../src/pages/' . $url . '.php');
    $realBase = realpath(__DIR__ . '/../src/pages/');

    if ($page && strpos($page, $realBase) === 0 && file_exists($page)) {
        require_once $page;
    } else {
        echo "404 - Halaman tidak ditemukan";
    }
} else {
    echo "404 - Halaman tidak ditemukan";
}
