<?php
session_start();
include 'E:\xampp\htdocs\rerice_final_version2\database\connection.php';
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
    $newfrom = $_POST['from'];
    $newto = $_POST['to'];
    $newtaskname = $_POST['taskname'];

    $val = validateinputs($newname, $newfrom, $newto, $newtaskname);
    if (!$val) {
        return 0;
    }

    // write query
    $SQL = "UPDATE  `company` 
                SET
                `name`='$newname',`from`='$newfrom',
                `to`='$newto',`taskname`='$newtaskname' 
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

        $idd = $_GET['id'];

        $sqldelete = "DELETE FROM `company` WHERE `id`= $idd ";
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
function validateinputs($newname, $newfrom, $newto, $newtaskname)
{
    if (
        empty($newname) || empty($newfrom) ||
        empty($newto) || empty($newtaskname) ||
        trim($newname) === '' ||
        trim($newfrom) === '' ||
        trim($newto) === ''   ||
        trim($newtaskname) === ''
    ) {
        $msgtype = "alert-danger";
        $msg = "Please fill all fields";
        return FALSE;
    }
    return TRUE;
}
