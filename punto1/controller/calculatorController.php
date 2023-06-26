<?php 

if (isset($_POST["first_number"]) &&
isset($_POST["second_number"]) && isset($_POST["operation_type"])) {



$firstNumber = intval( $_POST["first_number"]) ;
$secondNumber = intval($_POST["second_number"]);
$opertionType = $_POST["operation_type"];

$total = 0;

switch ($opertionType) {
    case "SUMA":
        $total = $firstNumber + $secondNumber;
        break;
    case "RESTA":
        $total = $firstNumber - $secondNumber;
        break;
    case "MULTIPLICA":
        $total = $firstNumber * $secondNumber;
        break;
    case "DIVIDE":
        $total = $firstNumber / $secondNumber;
        break;
    default:
        $message = "Usted no escogio una operacion";
}


    
}
?>