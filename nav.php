<?php
session_start();

include 'database/logout.php';
include 'C:\xampp\htdocs\rerice_final_version2\database\update_user.php';


if ($_SESSION['status']) {
    $id =  $_SESSION['id'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
    $token = $_SESSION['token'];
    $image = $_SESSION['image'];
} else {
    $name = "Guest";
    $role = "client";

    $id = 0;
    $image = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" href="images\Logo-4.png">
    <title>Re Rice</title>
    <style>
        a {
            color: black !important;
            text-decoration: none !important;

        }

        /* a:hover {
            color: red !important;
            text-decoration: underline !important;
        } */

        .btn .btn-outline-primary {
            border: 2px solid currentColor;
            /* background-color: transparent; */
            /* color: currentColor; */
            transition: all 0.3s ease;
            background-color: #fff;

        }

        /* .btn:hover {
            background-color: #164a41 !important;
            color: #ffffff !important;
            border-color: #164a41 !important;
        } */

        .dropdown-menu {
            max-width: 100px;
        }

        .navbar-collapse {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="http://localhost/rerice_final_version2/index.php"><img class="rounded" src="http://localhost/rerice_final_version2/images/Logo-5.png" alt="" width="150px" height="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/rerice_final_version2/index.php" data-tra="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/rerice_final_version2/index.php#about" data-tra="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/rerice_final_version2/products/products.php" data-tra="products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/rerice_final_version2/company.php" data-tra="com">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/rerice_final_version2/index.php#contact" data-tra="contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" data-tra="orders">Orders</a> -->
                    </li>

                    <li class="nav-item">
                        <select class="nav-link active" aria-current="page" id="language-selector">
                            <option value="en">English</option>
                            <option value="ar">عربي</option>
                        </select>
                    </li>
                </ul>


                <form class="d-flex  text-center   ">
                    <ul class="navbar-nav me-auto  mb-lg-0 text-center">


                        <?php if ($role == 'admin' && $name != "Guest") { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/rerice_final_version2/dashboard/profile.php" data-tra="dashboard">Dashboard</a>
                            </li>
                        <?php } ?>

                    </ul>
                    <?php if ($name == "Guest") { ?>
                        <a class="btn text-white m-1 " href="login/loginpage.php" data-tra="login" style="border-radius: 10px; background-color: #4d774e;">Login</a>
                    <?php } ?>
                    <a class="btn text-white " href="http://localhost/rerice_final_version2/payment/shoppingbag.php" target="_blank" data-tra="buy-now" style=" border-radius: 10px; background-color: #4d774e;">Buy Now</a>
                </form>

                <div class="dropdown p-1 m-1">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle ml-2" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if ($image) { ?>
                            <img src="http://localhost/rerice_final_version2/rawda/<?php echo $_SESSION['image'] ?>" alt="not in userimages folder" width="32" height="32" class="rounded-circle me-2 ml-2">
                        <?php } else { ?>
                            <img src="images/logo-4.png ?>" alt="" width="32" height="32" class="rounded-circle me-2 ml-2">
                        <?php
                            // E:\xampp\htdocs\rerice_final_version2\userimages\photo_2023-08-12_22-48-57.jpg
                        }
                        ?>
                        <strong><?php echo $name ?></strong>
                    </a>
                    <?php if ($id) { ?>
                        <ul class="dropdown-menu text-small shadow  " aria-labelledby="dropdownUser2" style="min-width: 7rem;">


                            <li><a class="dropdown-item" href="http://localhost/rerice_final_version2/dashboard/profile.php" target="_blank" data-tra="profile">Profile</a></li>

                            <li>

                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Settings</a></li>

                            <li>
                            <li>

                                <hr class="dropdown-divider">
                            </li>
                            <form action="" method="post">
                                <button name="logout" class="dropdown-item" data-tra="sign-out">
                                    Sign out
                                </button>
                            </form>
                        <?php } ?>
                        </ul>


                </div>
            </div>
        </div>

    </nav>

    <script>
        AOS.init();
    </script>

    <script src="script.js"></script>

    <!-- Settings Form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3 text-center">
                            <?php if ($image) { ?>
                                <img src="http://localhost/rerice_final_version2/rawda/<?php echo $_SESSION['image'] ?>" alt="" width="100" class="rounded-circle ">
                            <?php } else { ?>
                                <img src="userimages/logo-4.png ?>" alt="" width="100" class="rounded-circle">
                            <?php
                            }
                            ?>
                            <!-- <img src="logo-4.png" class="img-fluid" alt="..." width="120px"> -->
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" id="recipient-name" name="imagee">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name" name="username" value="<?php echo $_SESSION['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Phone:</label>
                            <input type="text" class="form-control" id="recipient-name" name="phone" value="<?php echo $_SESSION['phone_number'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Role:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?php echo $_SESSION['role'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?php echo $_SESSION['email'] ?>" disabled>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="updateuser">Update Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>



<!-- company Form -->
<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New company</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <?php if ($image) { ?>
                            <img src="http://localhost/rerice_final_version2/rawda/<?php echo $_SESSION['image'] ?>" alt="" width="100" class="rounded-circle ">
                        <?php } else { ?>
                            <img src="userimages/logo-4.png ?>" alt="" width="100" class="rounded-circle">
                        <?php
                        }
                        ?> -->
                        <!-- <img src="logo-4.png" class="img-fluid" alt="..." width="120px"> -->
                    <!-- </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="id" value="<?php echo $_SESSION['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Company Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name" value="<?php echo $_SESSION['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" id="recipient-name" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" id="recipient-name" name="uploadfile">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Company Email:</label>
                        <input type="text" class="form-control" id="recipient-name" name="email" value="<?php echo $_SESSION['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Admin ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="admin_id" value="<?php echo $_SESSION['id'] ?>">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="upload">Upload Data</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

