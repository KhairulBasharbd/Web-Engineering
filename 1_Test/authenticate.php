<?php
    $submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<p>Form submitted? <?php echo (int) $submitted; ?></p>
<p>Your login info is</p>
<ul> 
    <li><b>Username: </b> <?php echo $_POST['username'] ?> </li>
    <li><b>Password: </b> <?php echo $_POST['password'] ?></li>
</ul>  


</body>
