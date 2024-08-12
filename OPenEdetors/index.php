<?php


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "contactus";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Ensure the table exists
// $tableCheckQuery = "SHOW TABLES LIKE 'comments'";
// $result = $conn->query($tableCheckQuery);

// if ($result->num_rows == 0) {
//     // Table does not exist, create it
//     $createTableQuery = "
//     CREATE TABLE comments (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(100) NOT NULL,
//         phone VARCHAR(15) NOT NULL,
//         message TEXT NOT NULL,
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//     )";

//     if ($conn->query($createTableQuery) === TRUE) {
//         echo "Table comments created successfully.";
//     } else {
//         die("Error creating table: " . $conn->error);
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $conn->real_escape_string($_POST['name']);
//     $phone = $conn->real_escape_string($_POST['phone']);
//     $message = $conn->real_escape_string($_POST['message']);

//     $sql = "INSERT INTO comments (name, phone, message) VALUES ('$name', '$phone', '$message')";

//     if ($conn->query($sql) === TRUE) {
//         $feedback = "New record created successfully";
//     } else {
//         $feedback = "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
// }
// 
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title>RERICE</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Projects</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
                <!-- <br>
                <a href="#">
                    <i class="fa fa-search"></i>
                </a> -->
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/img (3).jpg" alt="RERICE LOGO">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li>
                <a href="blogslist.html">Blog</a>
            </li>
            <li>
                <a href="blogslist.html">Projects</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fa fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>

    <div id="banner">
        <h1>RERICE</h1>
        <h3>Invest with confidence</h3>
    </div>

    <main>
        <a href="blogslist.html">
            <h2 class="section-heading">All Blogs </h2>
        </a>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/img (4).jpg" alt="Card Image">
                    </a>
                </div>

                <div class="Card-description">
                    <a href="blogpost.html">
                        <h3>أولا الفكرة العامة للمشروع </h3>
                    </a>
                    <p>
                        تم بناء الفكرة على ان تكون حل لمشكلة تواجه المجتمع والبيئة وتحويلها الي منفعة عامة
                        ومصدر دخل للكثير ولتحسين االاقتصاد والبيئة والتنمية المحلية
                    </p>
                    <a href="more.html" class="btn-readmore">Read More </a>
                </div>
            </div>


            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="img/rice-1121001_640.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="Card-description">
                    <a href="#">
                        <h3>First, the general idea of ​​the project</h3>
                    </a>
                    <p>
                        The idea was built on the idea that it would be a solution to a problem facing society and the environment and turn it into a public benefit
                        It is a source of income for many and to improve the economy, environment and local development
                    </p>
                    <a href="moree.html" class="btn-readmore">Read More </a>
                </div>
            </div>
        </section>

        <h2 class="section-heading">All Projects </h2>
        <section>
            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="img/rice-7176354_1280.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="Card-description">
                    <a href="#">
                        <h3>ثانيا المشروع</h3>
                    </a>
                    <p>
                        تم اختيار المخلفات الزراعية مثل قش الأرز ومخلفات الذرة والقمح و مخلفات أشجار النخيل
                        التي تحرق وتتسبب في تلوث البيئة والكثير من المشاكل كالتلوث والأحتباس الحراري وغيرها
                        لتكون المشكلة المراد الوصول لحل لها
                        و بعد التفكير في إمكانية الأستفادة لها تم الوصول لفكرة استخراج المادة المشتركة في معظم
                        هذه المخلفات والتي تعتبر ذات قيمة نسبية لدخولها في الكثير من الصناعات وهي مادة
                        السليلوز التي تدخل في الصناعات الدوائية والغذائية و النسيجية و صناعة الورق المقوي
                        والبالستيك الحيوي صديق البيئة وغيرها من الصناعات الهامة
                    </p>
                    <a href="moreee.html" class="btn-readmore">Read More </a>
                </div>
            </div>


            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="img/lava-rocks-2101020_1280.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="Card-description">
                    <a href="#">
                        <h3>Secondly, the project</h3>
                    </a>
                    <p>
                        Agricultural wastes such as rice straw, corn and wheat waste, and palm tree waste were selected
                        Which burns and causes environmental pollution and many problems such as pollution, global warming, and others
                        To be the problem to be solved
                        After thinking about the possibility of benefiting from it, the idea of ​​extracting the common material in most of them was reached
                        These wastes, which are considered of relative value due to their use in many industries, are a material
                        Cellulose used in the pharmaceutical, food, textile and cardboard industries
                        Environmentally friendly bioplastics and other important industries
                    </p>
                    <a href="moreeee.html" class="btn-readmore">Read More </a>
                </div>
            </div>
        </section>

        <!-- <h2 class="section-heading"> Leave us a comment !</h2> -->






        <div class="container mt-5">
            <h2 class="section-heading"><button type="button" class="section-heading" data-toggle="modal" data-target="#commentModal">
                    Leave a Comment
                </button></h2>


            <?php if (isset($feedback)) {
                echo "<p>$feedback</p>";
            } ?>

            <!-- Modal -->
            <div class="modalFade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="commentModalLabel">Leave a Comment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="commentForm" method="post" action="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, accusantium in,
                 praesentium porro inventore asperiores,
                 sunt dolorum laudantium provident eaque! Praesentium eum laborum facere laudantium quia aperiam voluptatem corrupti?
            </p>
            <a href="#" class="btn-readmore">GitHub profile</a>
        </section> -->


        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About </a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy </a>
                    </li>
                    <li>
                        <a href="#">Blogs</a>
                    </li>
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                </p>
            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>
                    This Website is developed by ReRice Team
                </p>
            </div>
        </footer>
    </main>

    <script src="main.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>