<?php
function base_url($path = '') {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $script = dirname($_SERVER['SCRIPT_NAME']);
    if (empty($path)) {
        return $protocol . '://' . $host . rtrim($script, '/');
    }
    return $protocol . '://' . $host . rtrim($script, '/') . '/' . ltrim($path, '/');
}
