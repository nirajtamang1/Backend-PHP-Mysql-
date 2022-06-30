<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['Name']);
unset($_SESSION['Email']);
echo header('location: index.php?message=logout');
?>