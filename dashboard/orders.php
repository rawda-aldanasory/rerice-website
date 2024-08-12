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

<div class="container-fluid">
  <?php

  include '..\nav.php';
  ?>
  <div class="d-flex  align-content-center w-100">


    <?php
    include 'sidebar.php';
    ?>





    <div class="row w-100">
      <div class="col-lg  " id="product">
        
        <table class="table table-striped w-100">
          <thead>
            <tr class="text-center ">
              <th scope="col">Product</th>
              <th scope="col">product id</th>
              <th scope="col">User Name</th>
              <th scope="col">Amount</th>
              <th scope="col">Price</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>

            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td> <img src="../images/celiloos.jpg" alt="Product Image" class="mr-3" width="100" height="100">
              </td>
              <td>7</td>
              <td>SBS</td>
              <td>100</td>
              <td>$2100.00</td>
              <td>2024-08-05</td>
              <td>10 : 50 : 34</td>
              <td><a class="btn btn-info" href="#?id=<?php echo
                                                      $row['']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="#?id=<?php
                                                                                                                                          echo $row['']; ?>">Delete</a></td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>