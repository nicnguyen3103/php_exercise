<?php
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = sanitize_input($_POST["name"]);
  }
  
  if (empty($_POST["datetime"])) {
    $emailErr = "Date is required";
  } else {
    $email = sanitize_input($_POST["datetime"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = sanitize_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = sanitize_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = sanitize_input($_POST["gender"]);
  }
?>