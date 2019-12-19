<?php
header("Content-Type: application/json");
// build a PHP variable from JSON sent using POST method
$v = json_decode(file_get_contents("php://input"));
echo "$v->Name";
?>