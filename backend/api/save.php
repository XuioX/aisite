<?php
require 'config.php';

if (['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Only POST allowed']);
    exit;
}

$input = file_get_contents('php://input');
file_put_contents('data.json', $input);
echo json_encode(['status' => 'saved']);
?>
