<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <label for="firstname">
            Firstname (*)
        </label>
        <br>
        <input type="text" name="firstname" placeholder="Enter your firstname" value="" required/>
        <br/>
        <br/>
        <label for="lastname">
            Lastname
        </label>
        <br>
        <input type="text" name="lastname" placeholder="Enter your lastname" value="" />
        <br/>
        <br/>
        <label for="age">
            Age (*)
        </label>
        <br/>
        <input type="number" name="age" placeholder="Enter your age" value="" required/>
        <br/>
        <br/>
        <label for="gender">
            Choose your gender:
        </label>
        <br/>
        <input type="radio" name="male" name="gender" value="male">
        <label for="male"> Male </label> 
        <br/>
        <input type="radio" name="female" name="gender" value="female">
        <label for="female"> Female </label> 
        <br/>
        <input type="radio" name="other" name="gender" value="other">
        <label for="other"> Other </label> 
        <br/>
        <br/>
        <label for="preferredgender">
            Choose your preferred gender:
        </label>
        <br/>
        <input type="radio" name="prefermale" name="preferredgender" value="male">
        <label for="male"> Male </label> 
        <br/>
        <input type="radio" name="preferfemale" name="preferredgender" value="female">
        <label for="female"> Female </label> 
        <br/>
        <input type="radio" name="preferother" name="preferredgender" value="other">
        <label for="other"> Other </label> 
        <br/>
        <br/>
        <input type="submit" value="Create profile"/>
    </form>

    <?php 
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    }
    var_dump($firstname);
    ?>
</body>
</html>