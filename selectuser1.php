<?php
session_start();
if(isset($_SESSION["UserName"]))
{
$sql="select * from customer where UserName='".$_SESSION["UserName"]."'";
$rs=mysqli_query($con,$sql);
$value=mysqli_fetch_assoc($rs);
}
else
echo"error";
?>