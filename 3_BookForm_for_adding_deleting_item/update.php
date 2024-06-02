<?php


echo"<h2><center>Update an item in Table</center></h2>";

// show specific index of the array in different fieled
$json = file_get_contents('books.json');    
$books = json_decode($json,true);
$id = $_GET['id'];
echo ' <center>';
echo '<form method="post" action="index.php">';
echo '<label for="title">Title:</label>';  
echo '<input type="text" id="title" name="title" value="'.$books[$id]["title"].'"><br><br>';
echo '<label for="author">Author:</label>';
echo '<input type="text" id="author" name="author" value="'.$books[$id]["author"].'"><br><br>';
echo '<label for="available">Available:</label>';
echo '<input type="text" id="available" name="available" value="'.$books[$id]["available"].'"><br><br>';
echo '<label for="pages">Pages:</label>';
echo '<input type="text" id="pages" name="pages" value="'.$books[$id]["pages"].'"><br><br>';
echo '<label for="isbn">ISBN:</label>';
echo '<input type="text" id="isbn" name="isbn" value="'.$books[$id]["isbn"].'"><br><br><br>';

echo '<input type="submit" value="Submit">';

echo '</form>';
echo ' </center>';

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['available']) && isset($_POST['pages']) && isset($_POST['isbn']))

{
    $books[$id]["title"] = $_POST['title'];
    $books[$id]["author"] = $_POST['author'];
    $books[$id]["available"] = $_POST['available'];
    $books[$id]["pages"] = $_POST['pages'];
    $books[$id]["isbn"] = $_POST['isbn'];


    // // Convert the object with numeric keys to an array of objects
    // $updatedBooks = [];
    // foreach ($books as $book) {
    //     $updatedBooks[] = $book;
    // }

    // // Encode the updated array of objects back to JSON
    // $updatedJson = json_encode($updatedBooks, JSON_PRETTY_PRINT);

    // // Write the updated JSON back to the file
    // file_put_contents('books.json', $updatedJson);      




    // $json = json_encode($books, JSON_PRETTY_PRINT);
    // file_put_contents("books.json", $json);
    header('Location: index.php');
}



?>
