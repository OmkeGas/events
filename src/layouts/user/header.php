<?php
require_once __DIR__ . '/../../../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title><?= $title ?? 'USER'; ?></title>
</head>

<body>
    <header>
        <h1>USER</h1>
        <nav>
            <a href="<?= $base_url ?>/index.php">Home</a> |
        </nav>
    </header>

    <main>