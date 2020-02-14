<?php
session_start();
$_SESSION["emialid"]="9";
$con=mysqli_connect("localhost","root","","travel") or die("Connection Error: " . mysqli_error($conn));
if(count($_POST)>0)
{
$result=mysqli_query($conn,"select *from users where emailid='" . $_SESSION["emailid"] . " ' ");
$row=mysqli_fetch_array($result);
if($_POST["currentPassowrd"]==$row["password"]) {
mysqli_query($conn,"update customer set password='" . $_POST["newPassword"] . "' where emailid='" . $SESSION["emailid"] . " ' ");
$message="Password changed";
} else
$message="Current Password is not correct";
}
?>


