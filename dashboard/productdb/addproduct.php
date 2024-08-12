<?php

include 'C:\xampp\htdocs\rerice_final_version2\database\connection.php';
if (isset($_POST['addproduct'])) {

    $productname = $_POST['productname'];
    $productprie = $_POST['productprie'];
    $productdes = $_POST['productdes'];
    $productamount = $_POST['productamount'];
    $filename = $_FILES['imageUpload']['name'];
    $tempname = $_FILES['imageUpload']['tmp_name'];
    $folder = 'images/' . $filename;
    $adminid = $_POST['id'];
    if (move_uploaded_file($tempname, $folder)) {
        $sql = "INSERT INTO products (name, price, amount, description,image, admin_id) VALUES (
        '$productname','$productprie','$productamount',' $productdes','$filename', '$adminid'
        )";
        $result = mysqli_query($conn, $sql);
        if ($result) {
        }
    }
}

if (isset($_POST['delete'])){

}
