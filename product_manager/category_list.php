<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>

	<!-- Code for Category names and delete buttons alongside it -->

	<?php foreach ($categories as $category){ ?>
	<tr>
		<td><?php echo $category['categoryName']; ?></td>
		<td><form  action="index.php" method="post">
		<input type="hidden" value="delete_category" name="action">
		<input type="hidden" name="delete_c" value="<?php echo $category['categoryID']; ?>">
		<input type ="submit" value = "delete"></form> </td>

	</tr>
	<?php	} ?>

        <!-- add category rows here -->


    </table>


	<!-- Code for adding new category with button Add -->

    <h2>Add Category</h2>

    <form action="index.php"  method ="post">

    <input type="hidden" name="action" value="add_category">
    <Label>Name : </label>
    <input type="text" name="category_name">
    <input type = "submit" value = "Add" >
    </form>

    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
