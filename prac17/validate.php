<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <title>Registration Form</title>
</head>
<body>
<?php

$error_array = array();

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $error_array["name"] = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error_array["email"] = "Invalid email format";
    }
  }
  
  if (empty($_POST["password"])) {
      $error_array["password"] = "Password is required";
  } 
  if (empty($_POST["confirm_password"])) {
      $error_array["confirm_password"] = "Confirm Password is required";
  } 
  
  if (!empty($_POST["password"]) && !empty($_POST["confirm_password"])) {
    $passwd = $_POST["password"];
    $passwd2 = $_POST["confirm_password"];
    if ($passwd != $passwd2) {
      $error_array["password"] = "passwords do not match";
    }
  }

    if(count($error_array) == 0) {
        echo "<h1>No Errors Found. Everything is Valid!</h1>";
    } else {
        echo "<table border=1 cellpadding=10 cellspacing=5>";
        echo "<tr><th>Field</th><th>Error</th></tr>";
        foreach ($_POST as $key => $value) {
            if (isset($error_array[$key])) {
                echo "<tr><td>$key</td><td>" . $error_array[$key] . "</td></tr>";
            }
        }
    }
?>
</table>

</body>
</html>
