<?php
session_start();
?>

<h1>Login Result</h1>

<?php

$defaultUserAcc = "user";
$defaultUserPwd = "12345";

$defaultAdminAcc = "admin";
$defaultAdminPwd = "54321";

$userName = $_POST["userName"];
$userPwd = $_POST["userPwd"];

if ( $defaultUserAcc == $userName && $defaultUserPwd == $userPwd ) {
    $_SESSION["who"] = 0;
    $cookiedate = strtotime("+1 hour", time());
    setcookie("userName", $defaultUserAcc, $cookiedate);
    header("Location:user.php");
} else if ( $defaultAdminAcc == $userName && $defaultAdminPwd == $userPwd ) {
    $_SESSION["who"] = 1;
    $cookiedate = strtotime("+1 hour", time());
    setcookie("adminName", $defaultAdminAcc, $cookiedate);
    header("Location:admin.php");
} else {
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}

?>