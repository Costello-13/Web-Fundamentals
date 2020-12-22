<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link  rel="stylesheet" href="./styling/style.css" type="text/css">
</head>
<body>
<div class="containeraccount">
    <?php 
        include "./Includes/Header.php"; 
    ?>
    <div class="formcontainer">
    <form action="Created.php" method="POST" id="form">
        <h3>
            <label for="firstname">Firstname:</label>
        </h3>
        <input type="text" name="firstname" placeholder="Enter your firstname" value="" required/>
        <h3>
            <label for="lastname">Lastname:</label>   
        </h3>
        <input type="text" name="lastname" placeholder="Enter your lastname" value=""/>
        <h3>
            <label for="age">Age:</label>
        </h3>
        <input type="number" name="age" placeholder="Enter your age" value="" required/>
        <br/>
        <h3>
            <label for="gender">Choose your gender:</label>
        </h3>
        <input type="radio" name="gender" name="gender" value="Male">
        <label for="male"> Male </label> 
        <br/>
        <input type="radio" name="gender" name="gender" value="Female">
        <label for="female"> Female </label> 
        <br/>
        <input type="radio" name="gender" name="gender" value="Other">
        <label for="other"> Other </label> 
        <br/>
        <h3>
            <label for="preferredgender">Choose your preferred gender:</label>
        </h3>
        <input type="radio" name="preferredgender" name="preferredgender" value="Male">
        <label for="male"> Male</label> 
        <br/>
        <input type="radio" name="preferredgender" name="preferredgender" value="Female">
        <label for="female"> Female </label> 
        <br/>
        <input type="radio" name="preferredgender" name="preferredgender" value="Other">
        <label for="other"> Other </label> 
        <br/>
        <br/>
        <input type="submit" value="Create profile"/>
    </form>
    </div>
    <?php 
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
    
    <?php 
    include "./Includes/Footer.php"; ?>
</div>
</body>
</html>