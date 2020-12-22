<?php 

include_once "./database.php";

if (isset($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
}

var_dump($firstname);