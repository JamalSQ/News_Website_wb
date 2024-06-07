<?php
session_start();

// Unset specific session variables
unset($_SESSION['email']);
unset($_SESSION['status']);

// Redirect to the index.php page
header('Location: ../index.php');
exit();
?>