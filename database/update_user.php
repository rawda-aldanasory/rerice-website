<?php 

// include 'E:\xampp\htdocs\rerice_final_version2\database\connection.php';
include 'C:\xampp\htdocs\rerice_final_version2\database\connection.php';




if (isset($_POST['updateuser'])) {
    $id = $_SESSION['id'];
    $newname = $_POST['username'];
    // $image = $_POST['image'];
    $new_phone_number = $_POST['phone'];
    $filename = $_FILES['imagee']['name'];
    $tempname = $_FILES['imagee']['tmp_name'];
    $folder = 'rawda/' . $filename;

    // die($filename);
     if($filename){
        $_SESSION['image'] = $filename;
        $SQL = "UPDATE  `users` 
                SET
                `name`='$newname'
                , `phone_number` = '$new_phone_number',`image` = '$filename'
                WHERE  `id`='$id'";
     }else{
        $SQL = "UPDATE  `users` 
                SET
                `name`='$newname'
                , `phone_number` = '$new_phone_number'
                WHERE  `id`='$id'";
     }


        // excute query
        $resultupdate = $conn->query($SQL);

        // check if excuting or there are error
        if ($resultupdate == TRUE) {

            $_SESSION['name'] = $newname;
            $_SESSION['phone_number'] = $new_phone_number;
            // $_SESSION['image'] = $filename;
            move_uploaded_file($tempname, $folder);

            // header("location:../index.php");
        } else {
            echo "Error:" . $resultupdate . "<br>" . $conn->error;
        
    }
}


function validateinputs($newname, $new_phone_number)
{
    if (
        empty($newname) || empty($new_phone_number) ||
        empty($newpass) ||
        trim($newname) === '' ||
        trim($new_phone_number) === ''
        // trim($newpass) === ''    
    ) {
        $msgtype = "alert-danger";
        $msg = "Please fill all fields";
        return FALSE;
    }
    return TRUE;
}
