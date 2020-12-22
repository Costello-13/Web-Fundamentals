<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Test</p>
    <?php 
    
    include "./Includes/database.php";
    
    $people = GetQuery("SELECT * FROM Person"); 

    foreach ($people as $person) {
    ?>
    <h2>
        <?php echo $person["person_firstname"]; ?>
    </h2>
    <?php } 
    ?>
</body>
</html>