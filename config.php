<?php

include 'dbconfig.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT user_id FROM users WHERE user_name = '$username' AND user_password = '$password' AND is_active = 1";
    $res = mysqli_query($db, $sql);

    if (!$res) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }

    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $active = isset($row['is_active']) ? $row['is_active'] : 0;

    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;

        header('location: index.php');
    } else {
        header("location: login.php");
    }
}
