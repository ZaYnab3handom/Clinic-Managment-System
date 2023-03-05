<?php
// echo"hhhhhhhhh";
session_start();
include_once("dbConnection.php");
if (isset($_POST['national_id']) && isset($_POST['pass'])) {
    //form validation
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $NId = test_input( $_POST['national_id']);
    $pass = test_input($_POST['pass']);

    if (empty($NId)){
        header("Location: login.html?error=National Id is required");
    }else if(empty($pass)){
        header("Location: login.html?error=Password is required");
    }else{
    // Check user is exist in the database
    $query    = "SELECT * FROM `users` WHERE national_id='$NId'
                 AND password='$pass'";
    $users = mysqli_query($connection, $query) or die(mysql_error());
    $user = mysqli_num_rows($users);
    
    if ($user === 1) {
        $_SESSION['NId'] = $user['nationl_id'];
        $_SESSION['userName'] = $user['name'];
        $_SESSION['userType']=$user['type'];
        // Redirect to user dashboard page
        header("Location: appointment/appointmentList.html");
    } else {
        header("Location: login.html?error=Incorrect National Id Or Password");
    }
}
} else 
?>