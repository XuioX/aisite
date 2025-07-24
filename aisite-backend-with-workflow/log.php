<?php
require 'config.php';
$token = $_GET['token'] ?? '';
if ($token !== 'sad') {
    http_response_code(403);
    exit("Access denied");
}
$ip = $_SERVER['REMOTE_ADDR'];
$log = $db->real_escape_string(file_get_contents("php://input"));
$db->query("INSERT INTO logs (ip, payload, created_at) VALUES ('$ip', '$log', NOW())");
echo "ok";
?>