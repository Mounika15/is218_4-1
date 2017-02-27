<?php
require_once('database.php');
// Get all categories
$query = 'SELECT * FROM categories_guitar1 ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>

	<?php foreach ($categories as $category) : ?>
	     <tr>
	     <td><?php echo $category['categoryName']; ?></td>
	     <td><form action="delete_category.php" method="post">
                 <input type="hidden" name="categoryID" value="<?php echo $category['categoryID']; ?>">
                 <input type="submit" value="Delete">
                 </form></td>
	     </tr>
	<?php endforeach; ?>

    
    </table>

   <!-- <h2>Add Category</h2>-->
   <p><a href="add_category_form.php">Add Category</a>
     	
    <!-- add code for the form here -->
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>