<html>
    <head>
        <title> Jorge-Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Links my Code to add Bootstrap CSS and Jquery Plugins -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="tect/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    </head>
    <body>
        <!--
        Code that makes the Jumbotron and the Words included in the Jumbotron using h1 and adding a button
        -->
        <div class="jumbotron">
            <h1>Blog Website</h1>
            <p>
                Welcome to my Blog Website!
            </p>
            <nav class="list-group">
            <p1><a class="list-group-item" href="index.php">Home</a></p1>
            <p2><a class="list-group-item" href="login.php">Login</a></p2>
            <p3><a class="list-group-item" href="post.php">Post</a></p3>
            <p4><a class="list-group-item" href="register.php">Register</a></p4>
            </nav>
        </div>
    </body>
</html>            
<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>
    

