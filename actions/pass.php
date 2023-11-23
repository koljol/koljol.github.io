<?php
session_start();

$_SESSION["password"] = $_POST["password_input"]; 


header("location: ../steps/error_on_login.php");
?>
     

</script>