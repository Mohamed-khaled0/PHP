<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php

// Assignment 3

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['user'];

    echo "The Request Method Is POST And Username Is $username <br>";

    if (in_array($username, $admins)) {
        echo "This Username $username Is Admin";
    } else {
        echo "This Username $username Is Not Admin";
    }
}
