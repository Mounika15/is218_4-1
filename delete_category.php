<?php
require_once('database.php');
$categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
if ($categoryID != false)
{
$query = 'DELETE FROM categories_guitar1
		where categoryID = :categoryID';
$statement = $db->prepare($query);
$statement->bindValue(':categoryID', $categoryID);
$success = $statement->execute();
$statement->closeCursor();
}
include('index.php');
?>
