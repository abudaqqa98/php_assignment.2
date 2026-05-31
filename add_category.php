<?php

include("config.php");

if(isset($_POST['add'])){

    $name = $_POST['name'];

    $query = "INSERT INTO categories(name)
    VALUES('$name')";

    mysqli_query($conn , $query);

    echo "Category Added";

}

?>

<form method="POST">

<input type="text" name="name" placeholder="Category Name"><br><br>

<button type="submit" name="add">Add Category</button>

</form>