<?php
$token = $_GET['token'] ?? '';
if ($token !== 'sad') {
    http_response_code(403);
    exit("Access denied");
}
shell_exec("sh /home/ppe0c2q6wo4/public_html/api/deploy.sh > /dev/null 2>&1 &");
echo "Deploy triggered.";
?>