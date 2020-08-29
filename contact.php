<?php
var_dump($_POST);

//variables $errors[]
$errors = [];

if (!isset($_POST['firstname'])||$_POST['firstname']=="" ) {
    $errors['firstname'] =  "error firstname";
}
if (!isset($_POST['lastname'])||$_POST['lastname']=="") {
    $errors['lastname'] = "error lastname";
}
if (!isset($_POST['email'])||$_POST['email']=="" ) {
    $errors['email'] =  "error email";
}
if (!isset($_POST['country'])) {
    $error['country'] =  "Select your country";
}
if (!isset($_POST['service'])) {
    $errors['service'] =  "error service";
}
if (!isset($_POST['message'])||$_POST['message']=="" ) {
    $errors['message'] =  "error message";
}


// processing

session_start();//use to link the variables with other php pages

if(empty($errors)){ //if no error collected
    $message = $_POST['message'];
    $header = 'FROM : raspberry@poulette.com';
    // mail('support@poulette.com','subject', $message, $header);
    
    //informing the user for succes
    header('location:index.php');//return to the index.php
    $_SESSION['success']='success'; //variable used in the session accross othe pages

} else{//if some error collected
    
    //informing the user for succes
    header('location:index.php');//return to the index.php
    $_SESSION['errors']=$errors; //variable used in the session accross othe pages
}





?>