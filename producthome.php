<!-- Add this CSS to your stylesheet or within a <style> tag -->
<style>
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .btn1 {
    padding: 10px;
    border-radius: 10px;
    background-color: #4d774e; /* Button background color */
    color: #ffffff !important; /* Button text color */
    /* transition: background-color 0.3s ease, color 0.3s ease; Smooth transition */
  }

  .btn1:hover {
    background-color: #164a41; /* Darker green on hover */
    color: #ffffff; /* Keep text color white on hover */
  }
</style>

<div class="container-fluid">
  <center>
    <h2 data-tra="ourproducts">Our Products</h2>
  </center>
</div>
<div class="card-group p-4">
  <div class="card m-3" data-aos="zoom-out-left">
    <img src="products/pp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" data-tra="lignin">Lignin</h5>
      <p class="card-text" data-tra="price_35">Price: 35</p>
      <p class="card-text" data-tra="amount"><small class="text-muted">Amount: KG</small></p>
      <a href="#" class="btn1" data-tra="add">Add to cart</a>
    </div>
  </div>

  <div class="card m-3" data-aos="zoom-out-up">
    <img src="images/celiloos.jpg" class="card-img-top" alt="celiloos.jpg">
    <div class="card-body">
      <h5 class="card-title" data-tra="cellulose">Cellulose</h5>
      <p class="card-text" data-tra="price_45">Price: 45</p>
      <p class="card-text" data-tra="amount">Amount: KG</p>
      <a href="#" class="btn1" data-tra="add">Add to cart</a>
    </div>
  </div>

  <div class="card m-3" data-aos="zoom-in-up">
    <img src="images/celiloos.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" data-tra="cellulose">Cellulose</h5>
      <p class="card-text" data-tra="price_45000">Price: 45000</p>
      <p class="card-text" data-tra="amount_ton">Amount: Ton</p>
      <a href="#" class="btn1" data-tra="add">Add to cart</a>
    </div>
  </div>

  <div class="card m-3" data-aos="zoom-out-up">
    <img src="products/lk.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" data-tra="hemo">HemoCellulose</h5>
      <p class="card-text" data-tra="price_100">Price: 100</p>
      <p class="card-text" data-tra="amount">Amount: KG</p>
      <a href="#" class="btn1" data-tra="add">Add to cart</a>
    </div>
  </div>
</div>

<center>
  <a href="products/products.php" class="btn1" style="padding:20px; border-radius: 10px; margin-bottom:20px;" data-tra="show">Show More</a>
</center>