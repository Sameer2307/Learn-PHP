<?php

// start session!
session_start();

// store session data
$_SESSION["username"] = "Callum";

// retrieve session data
echo "Username = " . $_SESSION["username"];

// delete the username value
unset($_SESSION["username"]);

// delete all session values
session_unset();

// terminate the session
session_destroy();

// regenerating the session id
if ($_POST["username"] == "admin" && $_POST["password"] == sha1("password")) {
    $_SESSION["authorized"] = true;
    session_regenerate_id();
}

// session time out
// set time-out period (in seconds)
$inactive = 600;

// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {
    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
        header("Location: /logout.php");
    }
}

$_SESSION["timeout"] = time();
