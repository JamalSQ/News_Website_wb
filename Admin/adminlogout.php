<?php
session_start();

// Unset specific session variables
unset($_SESSION['aemail']);
unset($_SESSION['adminloged']);
unset($_SESSION['adminstatus']);

// Redirect to the index.php page
header('Location: ../index.php');
exit();
?>