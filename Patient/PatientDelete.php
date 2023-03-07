<?php 
     include_once("../dbConnection.php");
    $id = $_GET["national_id"];
    //delet the prescription
     $sql = "delete from patient where user_id = $id"; 
     $result = mysqli_query($connection, $sql);
     $sql2 = "delete from users where national_id = $id"; 
     $result2 = mysqli_query($connection, $sql2);


     //delete the related prescription line
     //done By cascading Delete
     header("Location:Patient.html");


    ?>