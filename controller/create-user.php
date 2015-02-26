<!-- Code that adds functions to the register form when a person wants to make a user such as hidng the password -->
<?php
require_once(__DIR__ . "/../model/config.php");
/* this code makes the email, user, password case sensitive */
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
/* when creating the user it gives you a crypted password so the password wont be displayed */
$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET  "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");
/* an if statement that reads out if you successfully created a user or if you got an error making the user */
if($query) {
    echo "Successfully created user: $username";
}
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

