<?php

  if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['age'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['age'])) {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $age = $_POST['age'];
      echo '<strong>The following information will go in the DB: ' . $firstName . ' ' . $lastName . ' ' . $age . ' years old</strong>';
    }
  } else {
    echo 'Something went wrong';
  }
?>
