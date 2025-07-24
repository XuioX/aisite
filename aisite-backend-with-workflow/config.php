<?php
$db = new mysqli("localhost", "ppe0c2q6wo4", "Bedziedane50", "ppe0c2q6wo4");
if ($db->connect_errno) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}
?>