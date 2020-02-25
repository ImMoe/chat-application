<?php

/**
 * When instance of object is created
 * it auto includes it. It'll be registred as
 * _AUTOLOAD implementation.
 */
function autoload_class($class) {
    include 'classes/'.$class.".php";
}

spl_autoload_register("autoload_class");

// Create connection to database.
$database = new class_db("localhost", "onlinechat", "root", "");
$database->connection();

$today = date("Y-m-d H:i:s");
