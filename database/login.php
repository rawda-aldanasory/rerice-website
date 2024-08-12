<?php
include 'C:\xampp\htdocs\rerice_final_version2\database\connection.php';
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL statement to select the required columns
    $form = $conn->prepare("SELECT id, name, password, role , phone_number,token,image FROM users WHERE email = ?");
    $form->bind_param("s", $email);
    $form->execute();
    $form->bind_result($id, $name, $hashed_password, $role, $phone_number, $token, $image);
    $form->fetch();
    

    // die($idd);// Verify the password
    if (password_verify($password, $hashed_password)) {
        // Set session variables

        session_start();
        $_SESSION['status'] = 1;
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
        $_SESSION['phone_number'] = $phone_number;
        $_SESSION['token'] = $token;
        $_SESSION['image'] = $image;
        $_SESSION['status'] =1;
        // Redirect to the company page or another protected page
        header("Location: ../index.php");
    } else {
        echo "Invalid email or password.";
    }

    $form->close();
    // $conn->close();
    // echo ($idd);
//     $idd = $_SESSION['id'];
//     if (!$_SESSION['token']) {
    
//         $SQL = "UPDATE  `users` 
//                 SET
//                 `token`= 1 
//                     WHERE  `id`='$idd'";
//         mysqli_query($conn, $SQL);
//     }
}
