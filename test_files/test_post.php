<?php

$data = json_decode(file_get_contents('php://input'), true);

ob_start();
var_dump($data);
$output = ob_get_clean();
file_put_contents('log.txt', $output);
file_put_contents('log1.txt', $data['1']['temp']." ".$data['1']['connection']);
?>
