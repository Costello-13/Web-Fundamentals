<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link  rel="stylesheet" href="./styling/style.css" type="text/css">
</head>
<body>
<?php
include "./Includes/Header.php" ?>
<br/>
<div class="container-sign">
    <h1 id="signin">
        Sign in
    </h1>
</div>
<div class="formcontainer">
    <form action="./swiping.php" method="POST" id="formsignin">
        <h3>
            <label for="firstname">Firstname:</label>
        </h3>
        <input type="text" name="firstname" placeholder="Enter your firstname" value="" required/>
        <h3>
            <label for="lastname">Lastname:</label>   
        </h3>
        <input type="text" name="lastname" placeholder="Enter your lastname" value=""/>
        <br/>
        <br/>
        <br/>
        <input type="submit" id="buttonsignin" value="Sign in"/>
    </form>
</div>




<?php
include "./Includes/Footer.php" ?>
</body>
</html>