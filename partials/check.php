<?php
include './partials/config.php';
if(!isset($_SESSION['username']))
{
    //user not set, redirect to the login page
    $_SESSION['no-login-message'] = "<div class='error'>Login to view chats</div>";
    header('location:'.HOMEPAGE.'signin.php');

}
?>