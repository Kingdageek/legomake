<?php
include_once "functions.php";
$data = array_map('sanitize', $_POST);
extract($data);

// Validating
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "empty";
} elseif (strlen($name) < 3) {
    echo "name";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "email";
} else {
    // HANDLE MESSAGE.
    // FIRST SAVE TO A DATABASE TABLE CALLED `messages` 
    // THEN SEND TO hello@legomake.com
}