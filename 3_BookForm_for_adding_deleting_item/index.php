
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
        echo"    <td>".$books[$i]["title"]."</td>";
        echo"    <td>".$books[$i]["author"]."</td>";
        echo"    <td>".$books[$i]["available"]."</td>";
        echo"    <td>".$books[$i]["pages"]."</td>";
        echo"    <td>".$books[$i]["isbn"]."</td>";


        echo '<td>
            <form method="post" action="/1_Test"> 
                <a href="update.php?id='.$i.'">
                    Update
                </a>
            </form>
        </td>';
        echo '<td>
            <form method="post">
                <a href="delete.php?id='.$i.'">
                    Delete
                </a>
            </form>
        </td>';
    echo"</ tr>";

}
echo"</table></center>";

?>