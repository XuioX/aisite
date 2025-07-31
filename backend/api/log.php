<?php
require 'config.php';

$entry = date('Y-m-d H:i:s') . ' | ' . $_SERVER['REMOTE_ADDR'] . ' | ' . $_SERVER['REQUEST_URI'] . "\n";
file_put_contents($LOG_FILE, $entry, FILE_APPEND);
echo "logged";
?>
