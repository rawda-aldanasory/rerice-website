<?php
include '../nav.php';
$sql = "select * from products";
$products = mysqli_query($conn, $sql);
?>



<div class="container-fluid">
  <h2>Our Products </h2>
  <form class="d-flex ">
    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>
<div class="card-group p-3">
  <?php if ($products->num_rows > 0) {
    while ($row = $products->fetch_assoc()) {
  ?>
      <div class="card" style="max-width: 200px;">
        <img src="http://localhost/rerice_final_version2/dashboard/images/<?php echo $row['image'] ?>" class="card-img-top" alt="..." height="200px">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['name'] ?></h5>
          <p class="card-text">Price: <?php echo $row['price'] ?></p>
          <p class="card-text">Avilable Amount: <?php echo $row['amount'] ?></p>
          <a href="#" class="btn btn-primary">Add to cart</a>
          <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
      </div>
  <?php }
  } else {
    echo '<h1> NO Products </h1>';
  } ?>
</div>




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>