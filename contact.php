<?php
session_start();//use to link the variables with other php pages

// var_dump($_POST);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];
$service = $_POST['service'];
$message = $_POST['message'];


//variables $errors[]
$errors = [];
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isset($_POST['firstname'])||$_POST['firstname']=="" ) {
    $errors['firstname'] =  "Please fill in the firstname field";
    
}else{
    test_input($firstname);
}
if (!isset($_POST['lastname'])||$_POST['lastname']=="") {
    $errors['lastname'] = "Please fill in the lastname field ";
}else{
    test_input($lastname);
}
if (!isset($_POST['email'])||$_POST['email']=="" ) {
    $errors['email'] =  "Please fill in the email field";
}else{
    test_input($email);
}
if (!isset($_POST['country'])||$_POST['country']== "Select your country") {
    $errors['country'] =  "Please select your country";
}


if (!isset($_POST['message'])||$_POST['message']=="" ) {
    $errors['message'] =  "Please write your message";
}else{
    test_input($message);
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