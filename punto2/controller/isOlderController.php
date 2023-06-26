<?php 
$message = "";
if (isset($_POST["user_age"])) {

$userAge = intval($_POST["user_age"]);

if ($userAge > 17) {
    $message =  " Es mayor de edad";
}
else{
    $message =  " Es menor de edad";
}
}
?>