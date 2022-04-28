<?php
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $type = validate($_POST['type']);
    if (empty($email)) {
        header("Location: login.php?error=1");
        exit();
    } else if (empty($password)) {
        header("Location: login.php?error=2");
        exit();
    } else {
        // hashing the password
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND type = '$type'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['type'] = $row['type'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['logged_in'] = TRUE;
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=3");
                exit();
            }
        } else {
            header("Location: login.php?error=4");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
