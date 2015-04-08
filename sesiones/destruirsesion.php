<?php 

// Delete session variables and end the PHP session
// when they're no longer needed.

if (isset($_SESSION))
{
    //Clear the session array
   // Set $_SESSION array to an empty array
    $_SESSION = array();
    unset($_SESSION);
    session_unset();
    //End the session
    session_destroy();
}


?>