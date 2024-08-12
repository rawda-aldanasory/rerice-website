<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rerice";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $proid = $_GET['id'];
    $sql = "select * from products  where  id ='$proid' ";
    $product = mysqli_query($conn, $sql)->fetch_assoc();
}

if (isset($_POST['updateproduct'])) {
    $id = $_GET['id'];
    $description = $_POST['description'];
    $proprice = $_POST['proprice'];
    $proamount = $_POST['proamount'];
    $proname = $_POST['proname'];

    $SQL = "UPDATE  `products`  
                SET
                `name`='$proname', `price` = '$proprice',
                `amount`='$proamount', `description` = '$description' 
                WHERE  `id`='$id'";

    // excute query
    $resultupdate = $conn->query($SQL);

    // check if excuting or there are error
    header("location:product.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 500px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        Update Product
    </center>
    <form class="container  border border-primary
    " method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="proname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product['name'] ?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $product['price'] ?>" name="proprice">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $product['amount'] ?>" name="proamount">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $product['description'] ?>" name="description">
        </div>



        <center>

            <button type="submit" class="btn btn-primary" name="updateproduct">Submit</button>
        </center>
    </form>
</body>

</html>