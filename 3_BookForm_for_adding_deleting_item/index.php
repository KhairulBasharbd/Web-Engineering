
<?php
$name = "Khairul Basar";

include 'index1.html';


// Read the JSON file 
$json = file_get_contents('books.json'); 

// Decode the JSON file 
$books = json_decode($json,true); 

// Adding new item to the array
// $books[] =array('title' => 'The Catcher in the Rye',
//     'author' => 'J.D. Salinger',
//     'available' => true,
//     'pages' => 224,
//     'isbn' => '9780316769488');
    
// echo count($books);

//  $json = json_encode($books, JSON_PRETTY_PRINT);
//  file_put_contents("books.json", $json);


echo "<h2><center>Book Table</center></h2>";
echo "<center><table border='1', summary='This table displays'> 
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>ISBN</th>
    </tr>";

for($i=0 ;$i<count($books); $i++)
{   
    echo "<tr>";
        echo"    <td>".$book["title"]."</td>";
        echo"    <td>".$book["author"]."</td>";
        echo"    <td>".$book["available"]."</td>";
        echo"    <td>".$book["pages"]."</td>";
        echo"    <td>".$book["isbn"]."</td>";


        echo '<td><form method="post" action="/3_BookForm_for_adding_deleting_item/update.php "><button type="submit" name="update">Update</button></form></td>';
        echo '<td>
                <form method="post" action="/1_Test ">
                    <a href =  "delete.php?id= <?php echo $i; ?>> Delete
                    </a>
                </form>
            </td>';
        echo"</ tr>";

}
echo"</table></center>";

?>