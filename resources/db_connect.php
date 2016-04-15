<?php

date_default_timezone_set("America/Denver");
$port = 8888;

try 
{
    $db = new PDO(
        "mysql:host=localhost;dbname=TAM",
        "root",
        "root"
    );
    

    $db->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $db->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

    } 
catch (Exception $error) 
{
        error_log("Cannot connect to the database");
}

require_once "misc_functions.php";
?>
