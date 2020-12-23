<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swippity Swoppity</title>
    <link  rel="stylesheet" href="./styling/style.css" type="text/css">
</head>
<body>
    <!-- Header -->
    <?php 
    include "./Includes/Header.php"; ?>

    <!-- Database input -->
    <?php 
    
    include "./Includes/database.php";
    
    $people = GetQuery("SELECT * FROM Person"); 

    foreach ($people as $person) {
    ?>
    <!-- Database content -->
    <div id="containerswipe" class="js-swipe">
    <h1 class="jsfirstname jsswipe">
        <?php echo $person["person_firstname"]; ?>
    </h1>
   
    <h2 class="jsage jsswipe">
        <?php echo $person["person_age"] . " " ."years old"; ?>
    </h2>
    <h2 class="jsgender jsswipe">
        <?php echo "Gender: " . $person["person_gender"]; ?>
    </h2>
    <h2 class="jsprefgender jsswipe">
        <?php echo "Preferred gender: " . $person["person_preferred_gender"]; ?>
    </h2>
    
    <?php } 
    ?>
    </div>
    <br/>
    <br/>
    <br/>
    
    <!-- Swipe buttons -->
    <div id="swipebuttons">
        <button class="swiped" id="dislike">
            No thanks.
        </button>
        <button class="swiped" id="like">
            Yes please!
        </button>
    </div>

    <!-- Footer -->
    <?php 
    include "./Includes/Footer.php"?>

    <script src="./Assets/index.js"> </script>
</body>
</html>