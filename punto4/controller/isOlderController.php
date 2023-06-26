<?php 
$actual_date = date("Y-m-d");

$message = "";
if (isset($_POST["user_date"])) {

$userDate= $_POST["user_date"];
$years =  abs((strtotime($actual_date) - strtotime($userDate))/(60*60*24*365.25));
$yearsOld = intval(abs((strtotime($actual_date) - strtotime($userDate))/(60*60*24*365.25)));
$months = ($years-$yearsOld)*12;
$monthOld = intval($months);
$days = ($months- $monthOld )* (365.25/12);
$daysOld = intval($days);


if ($yearsOld > 17) {
    $message = "Su edad es " . $yearsOld . " años, con " . $monthOld . " meses y " . $daysOld . " dias por tanto: es mayor de edad";
}else{
    $message = "Su edad es " . $yearsOld . " años, con " . $monthOld . " meses y " . $daysOld . " dias por tanto: No es mayor de edad";
}
}
//
?>