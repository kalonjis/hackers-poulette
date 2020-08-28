<?php
var_dump($_POST);
//variables $error
$errors = [];

if (!isset($_POST['firstname'])||$_POST['firstname']=="" ) {
    $errors['firstname'] =  "error firstname";
}
if (!isset($_POST['lastname'])||$_POST['lastname']=="") {
    $errors['lastname'] = "error last";
}
if (!isset($_POST['email'])||$_POST['email']=="" ) {
    $errors['email'] =  "error email";
}
if (!isset($_POST['country'])||$_POST['country']==='Select your country' ) {
    $error['country'] =  "Select your country";
}
if (!isset($_POST['message'])||$_POST['message']=="" ) {
    $errors['message'] =  "error message";
}


// processing

if(empty($errors)){ //if no error collected
    echo 'succes';
    $message = $_POST['message'];
    $header = 'FROM : raspberry@poulette.com';
    // mail('support@poulette.com','subject', $message, $header);
} else{//if some error collected
    
    header('location:index.php');//return error info to the index.php
    session_start();//use to link the variables with other php pages
    $_SESSION['errors']=$errors;
}




// mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
?>