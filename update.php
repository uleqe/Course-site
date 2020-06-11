<?php
header('Content-Type: application/json');
session_start();
if(!empty($_POST["username"]) && !empty($_POST["newpass"])) {
    $username = $_POST["username"];
    $newpass = $_POST["newpass"];
    $fname=$_POST["name"];
    $lname=$_POST["lastname"];
    $p_info=$_POST["publicinfo"];
    $email = $_POST["email"];

    require_once "link.php";


    $sql = "UPDATE users SET username='$username',fname='$fname',lname='$lname',email='$email',password='$newpass',public_info='$p_info' where email='$email'";

    if ($link->query($sql) === TRUE) {
      echo "Data updated successfully";
    } else {
      echo "Error updating data: ".$conn->error;
    }

}




    // $result = mysqli_query($link,"UPDATE users SET username='$username',fname='$fname',lname='$lname',email='$email',password='$newpass',public_info='$p_info' where email='$_SESSION[email]'");

    // if($result){
    //     return 'Data successfully updated';
    // }

//     $stmt = $link->prepare("UPDATE users SET username='$username',fname='$fname',lname='$lname',email='$email',password='$newpass',public_info='$p_info' where email=?");
//     $stmt->bind_param("ss", $email);

//     $stmt->execute();

//     $result = $stmt->get_result();

//     $row = $result->fetch_assoc();

//     if ($row != null && $row['email'] != null) {
//         session_start();

//         $return = array(
//             'message' => "success"
//         );
//     } 
//     $stmt->close();
// }
// else{
//     $return = array(
//         'errorMessage' => "Data is empty!"
//     );
//     http_response_code(403);
// }
// echo (json_encode($return));