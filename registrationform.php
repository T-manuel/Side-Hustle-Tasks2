<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href ="registrationform.css" type = "text/css" rel = "stylesheet" >
</head>
<body>
    <div class="container">
        <form class = "first-form" action = "registrationform.php" method = "POST" autocomplete="off">
            <div class="form-group">
                <label for = "Username"> Username </label>
                <input name = "Username" class = "formControl" type = "text" placeholder = "7-10 characters" required>
            </div>
            <div class="form-group">
                <label for = "Surname"> Surname </label>
                <input name = "Surname" class = "formControl" type = "text" required>
            </div>
            <div class="form-group">
                <label for = "Firstname"> Firstname </label>
                <input name = "Firstname" class = "formControl" type = "text" required>
            </div>
            <div class="form-group">
                <label for = "MiddleName"> Middle Name </label>
                <input name = "MiddleName" class = "formControl" type = "text">
            </div>
            <div class="form-group">
                <label for = "email"> Email </label>
                <input name = "email" class = "formControl" type = "email" placeholder = "123@example.com" required>
            </div>
            <div class="form-group">
                <label for = "confirm email"> Confirm Email </label>
                <input name = "confirmEmail" class = "formControl" type = "email" required>
            </div>
            <div class="form-group">
                <label for = "password"> password </label>
                <input name = "password" class = "formControl" type = "password" placeholder = "8-12 charaters long"required>
            </div>
            <span> <input type = "checkbox" name = "T&amp;C" required> Accept Terms &amp; Conditions </span>
            <input type ="submit" class = "btn" value = "Register" >
        </form>
    </div>

    <br>
    <br>

    <?php
    if (isset($_POST["Username"])) {
        $username = $_POST["Username"];
        echo "<p class= 'php'> Username: $username </p> <br>";
    }
    if (isset($_POST["Surname"])) {
        $surname = $_POST["Surname"];
        echo "<p class= 'php'> Surname: $surname </p> <br>";
    }
    if (isset($_POST["Firstname"])) {
        $Firstname = $_POST["Firstname"];
        echo "<p class= 'php'> Firstname: $Firstname </p> <br>";
    }
    if (isset($_POST["MiddleName"])) {
        $MiddleName = $_POST["MiddleName"];
        echo "<p class= 'php'> Middle name: $MiddleName </p> <br>";
    }
    if (isset($_POST["email"]) && isset($_POST["confirmEmail"])) {
        $email = $_POST["email"];
        $confirmEmail = $_POST["confirmEmail"];
        if ($email != $confirmEmail) {
            echo "<p class= 'php'> please check the mail address </p> <br>";
        }

        else {
            echo "<p class= 'php'> Email: $email </p> <br>";
            } 
    }
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        echo "<p class= 'php'> password: $password </p> <br>";
    }
 ?>

</body>
</html>