<?php
session_start();
include '..\database/connection.php';

if (isset($_POST['signup'])) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $phone_number = $_POST['phone_number'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use a prepared statement to prevent SQL injection
    $sql = "INSERT INTO users(name, email, password ) VALUES ('$name', '$email', '$hashed_password')";
    $query=mysqli_query($conn, $sql);
    if ($query) {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password; // Note: it's better not to store the plain password in the session
        // $_SESSION['phone'] =  $phone_number;
        header("Location: http://localhost/rerice_final_version2/login/loginpage.php");
        exit();
    } else {
        echo "User failed to insert";
    }

    // $form->close();
}
