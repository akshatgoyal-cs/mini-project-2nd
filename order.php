
<?php
include("ConnectDb.php");
include("selectuser1.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div style= text-align:center;>
<?php
if($value["transportation"]=="Truck")
echo "<img src='cargotruck.jpg' height=800 width=100% style=border-radius:8px;opacity:0.8;>";
else
if($value["transportation"]=="Cargoplane")
echo "<img src='airforce.jpg' height=800 width=100% style=border-radius:8px;opacity:0.8;>";
else
if($value["transportation"]=="Cargoship")
echo "<img src='bayboat.jpg' height=800 width=100% style=border-radius:8px;opacity:0.8;>";
?>
<div class="left" style=text-transform:uppercase;>
<?php
echo $value["Name"];
?>
</div>
<div class="right">
<a href="logoutfile1.php">Logout</a>
</div>
<div class="center1" style=text-transform:uppercase;text-align:center;>
<h2>ORDER PLACED</h2>
<?php
echo "<font  size='4' color='000033'>From :</font>";
echo $value["Start"];
?>
<br>
<?php
echo "<font  size='4' color='000033'>Destination :</font>";
echo $value["Destination"];
?>
<br>
<?php
echo "<font  size='4' color='000033'>Distance :</font>";
echo $value["distance"];
echo "<font  size='2'>km</font>";
?>
<br>
<?php
echo "<font  size='4' color='000033'>Transporter :</font>";
echo $value["transportation"];
?>
<br>
<?php

echo "<font  size='4' color='000033'>Amount :</font>";

if($value["transportation"]=="Truck")
{
$amt=(int)$value["distance"]*10;

}


elseif($value["transportation"]=="Cargoplane")
{

$amt=(int)$value["distance"]*70;

}

elseif($value["transportation"]=="Cargoship")
{

$amt=(int)$value["distance"]*80;


}
echo $amt;
echo "<font  size='2'>rs</font>";
?>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>