<?php
require_once('pseudoarray.php');
$fake_database_result = array("Apples", "Pears", "Bananas", "Tomatoes","Garlic");
foreach ($fake_database_result as $value) {
    $items = pseudoarray($items,$value, ", ");
}
echo "Shopping list: ".$items."<hr>";
echo "Back to array:<br>";
$real_array = explode(", ", $items);
print_r($real_array);