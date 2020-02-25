<?php 
header('Content-Type: application/json');
require '../app/init.php';

echo json_encode($database->selectAll("chat_history"));