<?php 
     include_once("../dbConnection.php");
    $id = $_GET["user"];
    //delet the prescription
     $sql = "delete from prescription where id = $id"; 
     $result = mysqli_query($connection, $sql);

     //delete the related prescription line

     header("Location:prescriptionList.html");
    ?>