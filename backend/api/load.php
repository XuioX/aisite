<?php
require 'config.php';

if (!file_exists('data.json')) {
    echo json_encode([]);
    exit;
}

$data = file_get_contents('data.json');
echo $data;
?>
