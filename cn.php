<?php
session_start();
if ($_POST['pin'] == '1234') {
    $_SESSION['logged_in'] = true;
    header('Location: html.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>