<?php
if (isset($_POST['email']) || isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";

    if ($email == "admin@gmail.com" && $password == "admin") {
        header("Location: ../dashboard.php");
    } else {
        echo "Login Gagal";
    }
}
?>