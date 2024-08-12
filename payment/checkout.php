<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Responsive Checkout Form</title>
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f2;
            margin: 0;
            padding: 0;
            background-image: url(re\ rice4.jpg) ;
            background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #96ca96;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }



        .checkout-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: calc(100% - 25px);
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #08f486;
            border-radius: 4px;
        }

        .form-group i {
            margin-right: 10px;
        }

        button {
            width: 96%;
            padding: 15px;
            background-color: #28a745;
            border: none;
            color: #06e76b;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #218838;
        }

        h3 {
            width: 100%;
            border-bottom: 2px solid #f4f4f4;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 20px;
        }

        @media (min-width: 600px) {
            .form-group {
                width: 48%;
            }

            .form-group.full-width {
                width: 100%;
            }

            button {
                width: 48%;
                margin-top: 20px;
            }
        }

        @media (min-width: 768px) {
            .container {
                padding: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="checkout-form">
            <h2>Checkout Form</h2>
            <h3>Address Details</h3>
            <div class="form-group">
                <label for="name">
                  <i class="fas fa-user"></i>
                  Full Name
                  </label>
                <input type="text" id="name" 
                       name="name" required>
            </div>

            <div class="form-group">
                <label for="email">
                  <i class="fas fa-envelope"></i>
                      Email
                  </label>
                <input type="email" id="email" 
                       name="email" required>
            </div>

            <div class="form-group">
                <label for="address">
                  <i class="fas fa-address-card"></i>
                  Address
                  </label>
                <input type="text" id="address" 
                       name="address" required>
            </div>

            <div class="form-group">
                <label for="city">
                  <i class="fas fa-city"></i>
                  City
                  </label>
                <input type="text" id="city" 
                       name="city" required>
            </div>

            <div class="form-group">
                <label for="state">
                  <i class="fas fa-map-marker-alt"></i>
                  State
                  </label>
                <input type="text" id="state" 
                       name="state" required>
            </div>

            <div class="form-group">
                <label for="zip">
                  <i class="fas fa-map-pin"></i>
                  Zip Code
                  </label>
                <input type="text" id="zip" 
                       name="zip" required>
            </div>

            <h3>Payment Information</h3>
            <div class="form-group">
                <label for="card-name">
                  <i class="fas fa-user"></i>
                  Name on Card
                  </label>
                <input type="text" id="card-name" 
                       name="card-name" required>
            </div>

            <div class="form-group">
                <label for="card-number">
                  <i class="fas fa-credit-card"></i>
                  Credit Card Number
                  </label>
                <input type="text" id="card-number" 
                       name="card-number" required>
            </div>

            <div class="form-group">
                <label for="exp-month">
                  <i class="fas fa-calendar-alt"></i>
                  Exp Month
                  </label>
                <input type="text" id="exp-month" 
                       name="exp-month" required>
            </div>

            <div class="form-group">
                <label for="exp-year">
                  <i class="fas fa-calendar-alt"></i>
                  Exp Year
                  </label>
                <input type="text" id="exp-year" 
                       name="exp-year" required>
            </div>

            <div class="form-group">
                <label for="cvv">
                  <i class="fas fa-lock"></i>
                  CVV
                  </label>
                <input type="text" id="cvv" 
                       name="cvv" required>
            </div>

            <button type="submit">
              Place Order
              </button>
        </form>
    </div>
</body>

</html>
