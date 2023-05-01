<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $firstname = htmlspecialchars($_POST["fname"]);
            $lastname = htmlspecialchars($_POST["lname"]);

            if(empty($firstname)){
                echo "You forgot to enter your first name <br>";
            }

            if(empty($lastname)){
                echo "You forgot to enter your last name <br>";
            }

            if($lastname != "" && $firstname != ""){
                echo "<p>Hello ", $firstname." ". $lastname;
            } 
        }
    ?>

    <form action="" method="post">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br> 
        <button type="submit" value="Submit">Submit</button>
    </form>
</body>
</html>