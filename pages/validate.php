<?php
// validate.php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate_form($data) {
    $errors = [];

    $firstname = $data['firstname'] ?? '';
    $lastname = $data['lastname'] ?? '';
    $email = $data['email'] ?? '';
    $country = $data['country'] ?? '';
    $message = $data['message'] ?? '';
    
    if (isset($data['pseudo']) && !empty($data['pseudo'])) { // honeypot check
        return ['Bot detected'];
    }

    if (empty($firstname)) {
        $errors['firstname'] = "Please fill in the firstname field";
    } else {
        $firstname = test_input($firstname);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $errors['firstname'] = "Only letters and white space allowed";
        }
    }

    if (empty($lastname)) {
        $errors['lastname'] = "Please fill in the lastname field";
    } else {
        $lastname = test_input($lastname);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $errors['lastname'] = "Only letters and white space allowed";
        }
    }

    if (empty($email)) {
        $errors['email'] = "Please fill in the email field";
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Please enter a valid email address";
        }
    }

    if ($country == "Select your country") {
        $errors['country'] = "Please select your country";
    }

    if (empty($message)) {
        $errors['message'] = "Please write your message";
    } else {
        $message = test_input($message);
    }

    return $errors;
}
?>
