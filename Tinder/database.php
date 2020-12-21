<?php 

function dbconnection() {
    $Hostname = "ID328554_test.db.webhosting.be";
    $Username = "ID328554_test";
    $Password = "temppass13";
    $Database =  "ID328554_test";

    $connection = mysqli_connect($Hostname, $Username, $Password, $Database);

    if ($connection == false) {
        die("Connection Failed");
    }

    return $connection;
}

function CloseConnection($connection) {
    $connection->close();
}


function GetQuery($sqlquery) {
$connection = dbconnection();

$sql = $sqlquery;
$result = mysqli_query($connection, $sql);

return $result->fetch_all(MYSQLI_ASSOC);
}

$people = GetQuery("SELECT * FROM Person"); 

foreach ($people as $person) {
    echo $person["person_firstname"] . "<br/>";
}

function InsertQuery($sqlquery) {
    $connection = dbconnection();

    $result = mysqli_query($connection, $sqlquery);

    CloseConnection($connection);

    return $result;
}

// InsertQuery("INSERT INTO Person (person_firstname) VALUES ('Valérie')");

