
<?php 
echo"<h2><center>Delete an item in Table</center></h2>";    
$json = file_get_contents('books.json');
$books = json_decode($json,true);
$id = $_GET['id'];
echo ' <center>';
echo '<form method="post" action="index.php">';
echo '<label for="title">Title:</label>';
echo '<input type="text" id="title" name="title" value="'.$books[$id]["title"].'" readonly><br><br>';
echo '<label for="author">Author:</label>';
echo '<input type="text" id="author" name="author" value="'.$books[$id]["author"].'" readonly><br><br>';
echo '<label for="available">Available:</label>';
echo '<input type="text" id="available" name="available" value="'.$books[$id]["available"].'" readonly><br><br>';
echo '<label for="pages">Pages:</label>';
echo '<input type="text" id="pages" name="pages" value="'.$books[$id]["pages"].'" readonly><br><br>';

echo '<label for="isbn">ISBN:</label>';

echo '<input type="text" id="isbn" name="isbn" value="'.$books[$id]["isbn"].'" readonly><br><br><br>';
echo '
<input type="submit" value="Delete">
</form>';
echo ' </center>';
if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available']) && isset($_POST['pages']) && isset($_POST['isbn']))
{
    unset($books[$id]);
    $json = json_encode($books, JSON_PRETTY_PRINT);
    file_put_contents("books.json", $json);
    header('Location: index.php');
}
?>
