<?php
session_start();
if ($_SESSION['Login']) {
header("refresh:3;url=homepage.html");
unset($_SESSION["Fname"]);
}
?>
