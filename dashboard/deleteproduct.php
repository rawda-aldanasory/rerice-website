<?php 

include 'C:\xampp\htdocs\rerice_final_version2\database\connection.php';
$pid = $_GET['id'];
echo $pid;

if($pid){
    $sql = "DELETE FROM `products` WHERE `id`=$pid";
    $conn->query($sql);
    header("location: product.php");
}
?>