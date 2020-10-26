<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals - POST</title>
</head>
<body>
    <form method = "POST">
        <input type="text" name = "name"><br>
        <button type = "submit">Press Me!</button>
    </form>

    <?php
        // Superglobals
        // These are built in variables in PHP that available in all scopes
        
        // $_POST
        // This means pass the form values into the url, but we can't see them in url
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            echo "Your name is ".$name;
        }
    ?>
</body>
</html>