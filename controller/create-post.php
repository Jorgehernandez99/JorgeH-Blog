<!-- Code that adds function to the post form when trying to display a post -->
<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    /* An if statement that reads out if you successsfully made a post or if you encounterred an error */
    if($query) {
        echo "<p>Successfully inserted post: $title</p>";
    }
    else {
        echo"<p>" . $_CONNECTION["connection"]->error . "</p>";
    }
    
    