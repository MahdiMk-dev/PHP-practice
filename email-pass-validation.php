<?php
function validateEmail($email) {
    $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    return preg_match($emailRegex, $email);
}

function validatePassword($password) {
    //8 characters, 1 minimum capitalized,1 minimum lower,1 minimum number
    $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

    // Check if the password matches the regex pattern
    return preg_match($passwordRegex, $password);
}

// Example usage
$emailToValidate = "test@example.com";
$passwordToValidate = "Password123";

if (validateEmail($emailToValidate)) {
    echo "The email $emailToValidate is valid.\n";
} else {
    echo "The email $emailToValidate is not valid.\n";
}

if (validatePassword($passwordToValidate)) {
    echo "The password is valid.\n";
} else {
    echo "The password is not valid.\n";
}
?>
