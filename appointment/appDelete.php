<?php 
     include_once("../dbConnection.php");
    $id = $_GET["user"];
    //delet the prescription
     $sql = "delete from appointment where id = $id"; 
     $result = mysqli_query($connection, $sql);

     //delete the related prescription line
     //done By cascading Delete
     header("Location:appointmentList.html");


    ?>