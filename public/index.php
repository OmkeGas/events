<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);

$page = __DIR__ . '/../src/pages/' . $url . '.php';

if (file_exists($page)) {
    require_once $page;
} else {
    echo "404 - Halaman tidak ditemukan";
}