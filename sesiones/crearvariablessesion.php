<?php 

// Start new or resume existing session
session_start();

// Data that needs to be preserved is the username
$username = $_POST['usuario'];

// Set session variables by assigning values
// to the superglobal array $_SESSION
$_SESSION["sess_id"] = $lastId;
$_SESSION["sess_username"] = $username;

?>