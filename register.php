<?php

include "config.php";

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(name,email,password)
    VALUES('$name','$email','$password')";

    mysqli_query($conn , $query);

    echo "Done";
}

?>

<form method="POST">

<input type="text" name="name" placeholder="Name"><br><br>

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button type="submit" name="register">Register</button>

</form>