<?php 
     include_once("../dbConnection.php");
    $id = $_GET["national_id"];
    //delet the prescription
     $sql2 = "DELETE FROM users WHERE users.national_id= $id"; 
     $result2 = mysqli_query($connection, $sql2);


     //done By cascading Delete
     header("Location:Doctor.html");


    ?>