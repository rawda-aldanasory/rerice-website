<?php
session_start();
include("database\connection.php"); // Ensure this path is correct
// Check if the user is logged in and has the 'admin' role
// if (!isset($_SESSION['id'])){
//     // Not logged in
//     header("Location: login.php");
//     exit();
// }
//  if ($_SESSION['role'] !== 'admin') {
//     // Not an admin
//     header("Location: home.php");
//     exit();
// }

// Continue with the page logic for admins

################################## Upload ###############################


if (isset($_POST['upload'])) {
    // Check if file was uploaded without errors
    if (isset($_FILES['uploadfile']) && $_FILES['uploadfile']['error'] === UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $filename = $_FILES['uploadfile']['name'];
        $tempname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'images/' . $filename;

        // Ensure the folder exists
        if (!is_dir('images')) {
            mkdir('images', 0777, true);
        }

        // Move the uploaded file to the specified folder
        if (move_uploaded_file($tempname, $folder)) {
            // Prepare the SQL statement
            $sql = "INSERT INTO company (name, description, email, image, admin_id) VALUES (?, ?, ?, ?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                // Define $admin_id
                $admin_id = $_SESSION['id'];  // Assuming the admin ID is stored in the session
                // Define $newFileName
                $newFileName = $filename;
                
                // Bind parameters
                $stmt->bind_param("ssssi", $name, $description, $email, $newFileName, $admin_id);

                // Execute the statement and handle success or error
                if ($stmt->execute()) {
                    header("Location: home.php");
                    exit();
                } else {
                    echo "Error executing query: " . htmlspecialchars($stmt->error);
                }
                $stmt->close();
            } else {
                echo "Error preparing statement: " . htmlspecialchars($conn->error);
            }
        } else {
            echo "There was an error moving the uploaded file.";
        }
    } else {
        echo "No file uploaded or there was an upload error. Error code: " . $_FILES['uploadfile']['error'];
    }
}


################# edited #################

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM  `company ` WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        return $data;
    }
}
################# Update File #################

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $newname = $_POST['name'];
    $newdescription = $_POST['description'];
    $newemail = $_POST['email'];

$val = validateinputs($newname, $newdescription, $newemail);
    if (!$val) {
        return 0;
    }
    
    // write query
    $SQL = "UPDATE  `company` 
                SET
                `name`='$newname',`from`='$newdescription',
                `to`='$newemail'
                WHERE  `id`='$id'";

// excute query
$resultupdate = $conn->query($SQL);

// check if excuting or there are error
if ($resultupdate == TRUE) {
    $msgtype = "alert-success";
    $msg = "Record updated successfully.";
    
    header("location:dashboard.php");
} else {
    echo "Error:" . $resultupdate . "<br>" . $conn->error;
}
}


##################### delete ##############################

if (isset($_GET['delete'])) {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        
        $sqldelete = "DELETE FROM `company` WHERE `id`= $id";
        if ($conn->query($sqldelete) === TRUE) {
            $msgtype = "alert-danger";
            $msg = "company deleted..";
        } else {
            echo "Error:" . $sqldelete . "<br>" . $conn->error;
        }
    }
}
$msgtype = "";
$msg = "";
function validateinputs($newname, $newdescription, $newemail, $newtaskname) {
        if (
            empty($newname) || empty($newdescription) ||
            empty($newemail) ||
            trim($newname) === '' ||
            trim($newdescription) === '' ||
            trim($newemail) === ''
        ) {
            $msgtype = "alert-danger";
            $msg = "Please fill all fields";
            return FALSE;
        }
        return TRUE;
    }
?>
<!-- <link rel="stylesheet" href="../CSS/rank_style/style.css"> -->

<style>
    .home-caption-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* adjust the opacity to your liking */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-caption-cover h1 {
        color: #fff;
        font-size: 48px;
        /* adjust the font size to your liking */
        text-align: center;
    }

    .carousel-item img {
     object-fit: cover;
     height: 90vh;
     width: 100%;
    }
</style>
<?php 
// include 'rerice_final_version2\nav.php';
?>
</head>

<body>
<section id="company" class="vh-90">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <center>
            <h1>Our Parteners</h1>
            </center>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images\company (1).jpg" class="d-block w-100" alt="paris tower" style="object-fit: cover; height: 90vh;">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <!-- <h1 class="text-center" data-tra="welcome">Welcome <br> To Our Recycling page.</h1> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\company (3).jpg" class="d-block w-100" alt="buildings" style="object-fit: cover; height: 90vh;">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <!-- <h1 class="text-center" data-tra="focus">Focused <br>On Strategy.</h1> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\company (5).jpg " class="d-block w-100" alt="bridge" style="object-fit: cover; height: 90vh;">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <!-- <h1 class="text-center" data-tra="advanced">Advanced in <br>Digital Works.</h1> -->
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden" data-tra="previous">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden" data-tra="next">Next</span>
            </button>
        </div>
    </section>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
