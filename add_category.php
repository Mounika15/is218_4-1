<?php
$categoryName = filter_input(INPUT_POST, 'categoryName');

if ($categoryName == null)
{
$error = "Invalid product data. Check all fields and try again.";
include('error.php');
}
else
{

require_once('database.php');
$query = 'INSERT INTO categories_guitar1
		(categoryName)
		VALUES
		(:categoryName)';
$statement = $db->prepare($query);
$statement->bindValue(':categoryName', $categoryName);
$statement->execute();
$statement->closeCursor();

include('index.php');
}
?>
