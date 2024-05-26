

<?php
    $looking = isset($_GET['author']) || isset($_GET['title']) || isset($_GET['year']);
?>


<!DOCTYPE html> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
    <p>You lookin'? <?php echo (int) $looking; ?></p>
    <p><b>The book Author : </b> <?php echo $_GET['author'] ?></p>
    <p><b>The book Title : </b> <?php echo $_GET['title'] ?></p>
</body>