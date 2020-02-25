<?php

require '../app/init.php';

if (isset($_POST["message"])) {
    $message = $_POST["message"];
    $database->insert("INSERT INTO chat_history VALUES (:id, :user, :message, :created, :updated)", [
        "id" => NULL,
        "user" => "10",
        "message" => $message,
        "created" => $today,
        "updated" => $today
    ]);
}