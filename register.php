<?php

include 'dbconfig.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "INSERT INTO users(user_name, user_password)VALUES('$username', '$password')";

    if ($db->query($sql) === TRUE) {
        echo "Registration successfull";

        header("location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
