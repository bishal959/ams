<?php

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $entered_pin = $_POST['pin'];

  if ($entered_pin === PIN) {
    // PIN is correct, grant access and redirect to home page
    header('Location: sucess.html');
    exit;
  } else {
    // PIN is incorrect, deny access and show error message
    $error_message = 'Access denied. Please try again.';
  }

}

?>
