<?php

include "config.php";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users 
              WHERE email='$email' 
              AND password='$password'";

    $result = mysqli_query($conn , $query);

    if(mysqli_num_rows($result) > 0){

        echo "Login Success";

    }else{

        echo "Wrong Email or Password";

    }
}

?>

<form method="POST">

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit" name="login">Login</button>

</form>