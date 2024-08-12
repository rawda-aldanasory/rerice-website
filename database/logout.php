<?php
// session_start();
// include 'E:\xampp\htdocs\rerice_final_version2\database\connection.php';
include 'C:\xampp\htdocs\rerice_final_version2\database\connection.php';
// var_dump ($conn);
if (isset($_POST['logout'])) {

    $id = $_SESSION['id'];

    $SQL = "UPDATE  `users` 
    SET
    `token`= 0 
    WHERE  `id`='$id'";
    $result = mysqli_query($conn, $SQL);

    // $conn->query($SQL);

    $_SESSION['name'] = "Guest";
    $_SESSION['id'] = 0;
    $_SESSION['email'] = null;
    $_SESSION['token'] = 0;
    $_SESSION['status'] =0;
    header("Location:http://localhost/rerice_final_version2/index.php");
}
