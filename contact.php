<?php
var_dump($_POST);
//variables $error
$error = [];
$error['firstname'] = (!isset($_POST['firstname'])||$_POST['firstname']=="" ) ? "error firstname": null;
$error['lastname'] = (!isset($_POST['lastname'])||$_POST['lastname']=="" ) ? "error last": null;
$error['email'] = (!isset($_POST['email'])||$_POST['email']=="" ) ? "error email": null;
$error['country'] = ($_POST['country']=="Select your country" ) ? "Select your country": null;
$error['message'] = (!isset($_POST['message'])||$_POST['message']=="" ) ? "error message": null;

    $info = ($error['firstname'] === null && $error['lastname'] === null && $error['email'] === null && $error['country'] === null && $error['message'] === null ) ?  "succes": $error ;


var_dump($info) ;

// mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
?>