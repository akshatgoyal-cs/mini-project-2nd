<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<?php
include("header.php");
?>
<div class="center4" style= text-align:center; >
<form method="post" action="registration.php">
<h6 style="margin:5px;">REGISTRATION PAGE</h6>
<img src="img_avatar2.png" height=100px width=100px  style="margin:5px;">
<div><input style="margin:5px;" type="email" name="emailid" placeholder="Enter emailid"></div>
<div><input type="text" name="name" placeholder="Enter name"></div>
<div><input type="password" name="pwd" placeholder="Enter password"></div>
<div><input type="password" name="cnf" placeholder="Confirm password"></div>
<div><input class="sub" type="submit" value="Register"></div>

<form method="post" action="login.php">
<h7 style="margin:3px;">OR</h7>
<div><input class="sub" type="submit" value="Login"></div>

</form>

</form>
</div>
</div>

<?php
include("footer.php");
?>
</body></html>