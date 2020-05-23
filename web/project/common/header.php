<?php
 if(!$_SESSION['loggedIn']){
    echo '<a href="./?action=login">Back for more? Login.</a>
    <a href="./?action=register">First time around? Sign up.</a>';
} else{
    var_dump($_SESSION['userData']);
    echo "<span>Welcome back $_SESSION[userData][userfirstname] | </span><a href='./?action=logout'>Log Out</a>";
}
