<?php
$n=$_POST["start"];
$c=$_POST["des"];
$b=$_POST["dis"];
$k=$_POST["trans"];
$con=mysqli_connect("localhost","root","","travel");
if(!$con)
die("Server could not connected");
include("selectuser1.php");
$sqldata="update customer set Start='".$n."',Destination='".$c."',distance='".$b."',transportation='".$k."' where UserName='".$_SESSION["UserName"]."'";
$check=mysqli_query($con,$sqldata);
if($check!=0)
header("location:order.php");
else
echo "unable to save";
?>