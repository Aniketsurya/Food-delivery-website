<?php
 $con=mysqli_connect('127.0.0.1','root','');
 if(!$con)
 {
   echo 'Not connected to server';
 }
if(!mysqli_select_db($con,'swadaeghar'))
{
  echo 'Database not selected';
}

$Fname=$_POST['First_name'];
$Lname=$_POST['Last_name'];
$Gender=$_POST['Gender'];
$Dob=$_POST['Birthdate'];
$P_no=$_POST['number'];
$Email=$_POST['E-mail'];
$password=$_POST['repassword'];

$sql="INSERT INTO customers_accounts (Fname,Lname,Gender,Dob,P_no,Email,password) VALUES ('$Fname','$Lname','$Gender','$Dob','$P_no','$Email','$password')";

if(!mysqli_query($con,$sql))
{
  echo 'Account details not inserted in our database. Please enter your details again.';
  header("refresh:5;url=createaccount.html");
}
else {
  echo 'You are now part of Swad ae Ghar Family. Please login to order your food';
  header("refresh:5;url=login.html");
}
 ?>
