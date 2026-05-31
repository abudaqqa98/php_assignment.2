<?php

include("config.php");

if(isset($_POST['add'])){

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $details = $_POST['details'];
    $image = $_POST['image'];
    $user_id = $_POST['user_id'];

    $query = "INSERT INTO news(title, category_id, details, image, user_id)
    VALUES('$title','$category_id','$details','$image','$user_id')";

    mysqli_query($conn , $query);

    echo "News Added";
}

?>

<form method="POST">

<input type="text" name="title" placeholder="News Title"><br><br>

<input type="number" name="category_id" placeholder="Category ID"><br><br>

<textarea name="details" placeholder="News Details"></textarea><br><br>

<input type="text" name="image" placeholder="Image Name"><br><br>

<input type="number" name="user_id" placeholder="User ID"><br><br>

<button type="submit" name="add">Add News</button>

</form>