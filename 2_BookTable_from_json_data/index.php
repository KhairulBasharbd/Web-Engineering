
<?php
$name = "Khairul Basar";

echo "<h1><center>Hello {$name}, Wellcome!!</center></h1>";

// Read the JSON file 
$json = file_get_contents('books.json'); 

// Decode the JSON file 
$json_data = json_decode($json,true); 

// Display data 
print_r($json_data[0][1]); 

?>
