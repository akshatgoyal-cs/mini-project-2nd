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
<div style= text-align:center; >
<img src="high.jpg" height=800 width=100% style=border-radius:8px;opacity:0.8;>
<form method="post" action="calculation.php">
<div class="left" style=text-transform:uppercase;>
<?php
echo $value["Name"];
?>
</div>
<div class="right">
<a href="logoutfile1.php">Logout</a>
</div>
<div class="center">
<label for="start"><b>From</b></label>
    <input type="text"  placeholder="Source" name="start" required>

    <label for="des"><b>To</b></label>
    <input type="text"  placeholder="Destination" name="des" required>

    <label for="dis"><b>Distance</b></label>
    <input type="text"  placeholder="Distance in km" name="dis" required>

    <label for="trans"><b>By</b></label>
    <select id="trans" name="trans">
      <option value=" ">Type of Transport</option>
      <option value="Truck">Truck</option>
      <option value="Cargoplane">Cargoplane</option>
      <option value="Cargoship">Cargoship</option>
    </select>
    
    <button type="submit" class="registerbtn">Submit</button>
  </div>
</form>
</div>
<?php
include("footer.php");
?>
</body>
</html>