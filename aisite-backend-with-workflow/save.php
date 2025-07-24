<?php
require 'config.php';
$token = $_GET['token'] ?? '';
if ($token !== 'sad') {
    http_response_code(403);
    exit("Access denied");
}
$data = json_decode(file_get_contents("php://input"), true);
$payload = $db->real_escape_string(json_encode($data));
$ip = $_SERVER['REMOTE_ADDR'];
$db->query("INSERT INTO logs (ip, payload, created_at) VALUES ('$ip', '$payload', NOW())");
echo json_encode(["status" => "saved"]);
?>