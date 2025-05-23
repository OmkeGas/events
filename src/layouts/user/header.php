<?php
require_once __DIR__ . '/../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url ?>/src/css/main.css">
    <title><?= $title ?? 'USER'; ?></title>
    <style>
        @import url("https://fonts.cdnfonts.com/css/product-sans");

        main {
            font-family: "Product Sans", sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <h1>USER</h1>
        <nav>
            <a href="<?= $base_url ?>/index.php">Home</a> |
        </nav>
    </header>

    <main>