<?php
session_start();//use to link the variables with other php pages

// var_dump($_POST);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// $options = array(
//     'firstname' => ,
//     'lastName' => FILTER_SANITIZE_STRING,
//     'email' => FILTER_VALIDATE_EMAIL,
//     'message' => FILTER_SANITIZE_STRING);

// $result = filter_input_array(INPUT_POST, $options);

    //variables $errors[]
$errors = [];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) { // honeypot 
    // $errors['BotCatched'] = "Bot is trying to spam";
    header('location:index.php');
}
if (!isset($firstname)||$firstname=="" ) {
    $errors['firstname'] =  "Please fill in the firstname field";
    
}else {
    $firstname = test_input($firstname);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $errors['firstname'] =  "Only letters and white space allowed";
    }  
}
if (!isset($lastname)||$lastname =="") {
    $errors['lastname'] = "Please fill in the lastname field ";
}else{
    $lastname = test_input($lastname);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $errors['lastname'] =  "Only letters and white space allowed";
    }  
}
if (!isset($email)||$email =="" ) {
    $errors['email'] =  "Please fill in the email field";
}else{
    $email = test_input($email);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] =  "Please enter a valid email adress";
    }  
    
}
if (!isset($country)||$country == "Select your country") {
    $errors['country'] =  "Please select your country";
}


if (!isset($message)||$message =="" ) {
    $errors['message'] =  "Please write your message";
}else{
    $message =filter_var($message,FILTER_SANITIZE_STRING);
}


// processing


if(empty($errors)){ //if no error collected
    ob_start();
    require "mail.php";
    $data = ob_get_contents();
    //informing the user for succes
    if($messageSent){
        $_SESSION['success']='success'; //variable used in the session accross othe pages
        header('location:index.php');//return to the index.php
    }
    else
        echo $data;

} else{//if some error collected
    
    //informing the user for succes
    header('location:index.php');//return to the index.php
    $_SESSION['errors']=$errors; //variable used in the session accross othe pages
}





?>