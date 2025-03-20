<?php

session_start();
if (isset($_SESSION["who"])) {
    if ($_SESSION["who"] == 0) {
        echo "<p> Welcome back, ".$_COOKIE["userName"];
    } else if ($_SESSION["who"] == 1) {
        echo "<p> Welcome back,".$_COOKIE["adminName"];
    }
}

?>

<html>
    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">

    </head>
    
    <body>

        <div class="content">
            <form class="loginForm" action="login_check.php" method="POST">
                
                <h1 class="login">Please Login!</h1>
                
                <div class="inputForm">
                    <input type="text" id="user" name="userName" placeholder="Name">
                    <input type="password" id="pass" name="userPwd"  placeholder="Password">
                </div>
                <button type="submit" id="signIn">Submit</button>
            </form>
        </div>
    
    </body>
</html>