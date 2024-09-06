<?php

//checked weather the admin is login or not

if(!isset($_SESSION['admin'])) // if admin session is not set or admin is not logged in
{
    //redirect to login page with message
    $_SESSION['no-login-message-admin'] = "<div class='error'>Please login first admin</div>";
    //redirect to login page
    header('location:'.SITEURL.'login.php');

}



?>