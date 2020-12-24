<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
    <link  rel="stylesheet" href="./styling/style.css" type="text/css">
</head>
<body>
    <?php 
    include "./Includes/Header.php";
    ?>
    
    <br/>
    <br/>
    <div class="textcontainer">
       <h1 id="congrats">Congrats you've created a new account!</h1>
    </div>
    <br/>
    <img src="./Images/Completed.png" id="imagecompleted">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="buttons">
    <a href="./login.php" id="startswipe">
        Start Swiping
    </a>
    </div>
    <?php
    include "./Includes/Footer.php";

    include "./Includes/database.php";

    if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"]) && isset($_POST["gender"]) &&  isset($_POST["preferredgender"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $preferredgender = $_POST["preferredgender"];
    }

    InsertQuery("INSERT INTO Person (person_firstname, person_lastname, person_age, person_gender, person_preferred_gender) VALUES ('$firstname', '$lastname', '$age', '$gender', '$preferredgender')");
    ?>
</body>
</html>