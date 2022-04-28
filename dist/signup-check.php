<?php
include "db_conn.php";
if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['re_password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $password = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $email = validate($_POST['email']);
    $type=$_POST['type'];
    $pro=$_POST['pro'];
    $user_data = 'name=' . $name . '&email=' . $email;
    if (empty($name) && empty($name) && empty($name) && empty($name)) {
        header('Location:signup.php?error=2');
    } else {
        if (strlen($password) < 6) {
            header('Location:signup.php?error=3');
        } else if ($password !== $re_pass) {
            header("Location: signup.php?error=4");
            exit();
        } else {
            // hashing the password
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE email='$email' AND type='$type'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                header("Location: signup.php?error=5");
                exit();
            } else {
                $sql2 = "INSERT INTO users(user_name, password, email, type, pro) VALUES('$name', '$password', '$email', '$type', '$pro')";
                $result2 = mysqli_query($conn, $sql2);
                if ($result2) {
                    header("Location: signup.php?success=1");
                    exit();
                } else {
                    header("Location: signup.php?error=6");
                    exit();
                }
            }
        }
    }
} else {
    header('Location:signup.php?error=1');
    exit();
}
