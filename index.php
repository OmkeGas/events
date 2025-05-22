<?php
require_once "./config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>WELCOME TO MY WEBSITE</h1>
    <a href="<?= $base_url ?>dashboard/user/index.php">User</a> |
    <a href="<?= $base_url ?>dashboard/admin/index.php">Admin</a> |
</body>

</html>