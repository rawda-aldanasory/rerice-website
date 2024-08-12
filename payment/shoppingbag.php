<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="payment.css">


</head>

<body>
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <div class="modal clearfix">
    <div class="modal-product">
      <div class="product">

        <!-- Slideshow container -->
        <div class="product-slideshow">

          <!-- Full-width images with number and caption text -->
          <div class="productSlides fade">
          </div>



          <br>

          <!-- The dots/circles -->
          <div style="text-align:center; margin-top: -150px;">
            <img src="WhatsApp Image 2024-08-01 at 3.18.18 PM.jpeg" alt="" width="100px">
            <!-- <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
              <span class="dot" onclick="currentSlide(5)"></span> -->
          </div>

        </div>

        <h3 class="product-name">
          Re rice<br>
        </h3>
        <p style="color: aliceblue;" class="product-code-name">
          Style 428027 K0LCN 8685
        </p>
        <p style="color: aliceblue;" class="product-price">
          $1,590
        </p>

      </div>

      <div class="round-shape"></div>
    </div>
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Shopping Bag
      </div>

      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image"></div>

        <div class="description">
          <span>Re rice</span>
          <span>3 Tons</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" onclick="changeQuantity(this, 1)">+</button>
          <input type="text" value="1" disabled>
          <button class="minus-btn" type="button" onclick="changeQuantity(this, -1)">-</button>
        </div>

        <div class="total-price">$549</div>
      </div>

      <!-- product2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image"></div>

        <div class="description">
          <span>Re rice</span>
          <span>5 Tons</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" onclick="changeQuantity(this, 1)">+</button>
          <input type="text" value="1" disabled>
          <button class="minus-btn" type="button" onclick="changeQuantity(this, -1)">-</button>
        </div>

        <div class="total-price">$870</div>
      </div>

      <!-- product3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image"></div>

        <div class="description">
          <span>Re rice</span>
          <span>1 Tons</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" onclick="changeQuantity(this, 1)">+</button>
          <input type="text" value="1" disabled>
          <button class="minus-btn" type="button" onclick="changeQuantity(this, -1)">-</button>
        </div>

        <div class="total-price">$349</div>
      </div>

      <a class="bt" href="checkout.php">pay now</a>

      <script>
        function changeQuantity(button, delta) {
          const quantityInput = button.parentElement.querySelector('input[type="text"]');
          let currentValue = parseInt(quantityInput.value, 10);
          if (isNaN(currentValue)) currentValue = 0;

          const newValue = currentValue + delta;
          if (newValue >= 0) {
            quantityInput.value = newValue;
          }
        }
      </script>
      <script src="payment.js"></script>
</body>

</html>