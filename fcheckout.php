<?php
session_start();
if (isset($_POST['checkout'])) {
echo "You have successfully placed your order";
header("refresh:10;url=restaurants.php");
unset($_SESSION["shopping_cart"]);
}
?>
