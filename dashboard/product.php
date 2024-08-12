<style>
  /* Style the modal */
  .modal-content {
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  /* Style the form inputs */
  input[type="text"],
  input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  /* Style the submit button */
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  /* Style the custom file upload label */
  .custom-file-upload {
    width: 100%;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
  }

  /* Style the modal header */
  h1 {
    margin-top: 0;
    margin-bottom: 20px;
    font-weight: bold;
    font-size: 24px;
  }
</style>
<?php

include 'productdb/addproduct.php';

$sql = "select * from products";
$result2 = mysqli_query($conn, $sql);

?>
<div class="container-fluid">
  <?php

  include '..\nav.php';
  ?>
  <div class="d-flex align-content-center">
    <?php
    include 'sidebar.php';
    ?>



    <div class="modal fade" id="myLargeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <h1 data-tra="AddProduct">Add Product</h1>
          <form action="" method="post" enctype="multipart/form-data">


            <input type="text" placeholder="Product name" required data-tra="proname" name="productname">

            <input type="text" placeholder="Product Description" required data-tra="prodis" name="productdes">
            <input type="text" placeholder="Product Price" required data-tra="proprice" name="productprie">
            <input type="text" placeholder="Amount" required data-tra="proamount" name="productamount">
            <input type="hidden" placeholder="" required name="id" value="<?php echo $_SESSION['id'] ?>">
            <input type="file" id="imageUpload" name="imageUpload" accept="image/*">
            <input type="submit" value="Save" name="addproduct">
          </form>
        </div>
      </div>
    </div>




    <div class="row w-100" >
      <div class="col-lg m-3 " id="product">
        <a type="button" class="btn text-white" style="padding: 10px; border-radius: 10px; background-color: #4d774e; color:#ffffff;" data-bs-toggle="modal" data-bs-target="#myLargeModal" name="add">Add Product</a>

        <?php if ($result2->num_rows > 0) { ?>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $result2->fetch_assoc()) { ?>
                <tr class="text-center ">
                  <td> <img src="http://localhost/rerice_final_version2/dashboard/images/<?php echo $row['image'] ?>"     class="mr-3" width="100" height="80">
                  </td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['amount'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td class="  "><a class="btn btn-info bg-info" type="button" href="editproduct.php?id=<?php echo
                                                                                                        $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger bg-danger text-white" href="deleteproduct.php?id=<?php
                                                                                                                                                                                                          echo $row['id']; ?>">Delete</a></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
  </div>
</div>